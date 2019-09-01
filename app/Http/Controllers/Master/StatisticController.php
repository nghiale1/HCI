<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Answer;
use App\Models\User;
use App\Models\Major;
use App\Models\MajorBranch;
use App\Models\Classes;
use DB;
use App\Charts\Charts;
use App\Models\RegisterGraduate;
// Excel
use Excel;
use App\Exports\QuestionsExport;

class StatisticController extends Controller
{
    //khoi tao
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        $config = [
            'model' => new Survey(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_index($this->request);

        return view('pages.admins.statistic.index', ['data' => $data]);
    }

    // ajax lấy question thông qua  đổ ra survey
    public static function get_survey($survey_id)
    {
        $question = Question::where('survey_id', $survey_id)->get();
        foreach ($question as $item) {
            if ($item->question_type == 'Radio' || ($item->question_type == 'Checkbox')) {
                echo "$item->question_type"."<option value='".$item->question_id."'>".$item->question_title.'</option>';
            }
        }
    }

    /**
     * Thống kê câu trả lời, dựa trên câu hỏi của khảo sát.
     *
     * @param Request
     *
     * @return array $data
     */
    public function answer_statistic(Request $request)
    {
        // Lấy id khảo sát
        $survey_id = $request->get('survey');
        // Lấy id câu hỏi của khảo sát trên
        $question_id = $request->get('question');

        // $question_name = Question::where('question_id', $question_id)->first();
        // $question_name = $question_name['question_title'];

        // Lấy tất cả câu trả lời có câu hỏi = $question_id
        $answer = Answer::where('survey_id', $survey_id)->get();
        // Lấy trường [answer_content], nội dung câu hỏi, dạng json
        $answer = $answer->pluck('answer_content');
        // lặp qua từng câu trả lời, để decode
        foreach ($answer as $item) {
            $temp = json_decode($item, true); // $temp lưu tạm giá trị decode hiện tại
            $val_temp = $temp[$question_id]; // lấy câu trả có id câu hỏi = $question_id, (array)
            // kiểm tra có phải là mảng ko
            dd($val_temp);
            if (is_array($val_temp)) {
                // nếu < 2, thì chỉ có 1 giá trị, câu hỏi dạng radio
                // ngược lại, có nhiều hơn 1 giá trị, câu hỏi dạng checkbox
                if (count($val_temp) < 2) {
                    // gán câu trả lời vào mảng $answer
                    $answer_content[] = $val_temp[0];
                } else {
                    // Lặp qua, lấy giá trị câu trả lời gán vào mảng $answer
                    foreach ($val_temp as $key => $value) {
                        $answercontent[] = $value;
                    }
                }
            }
        }

        // chuyển về kiểu collect để sử dụng các phương thức count(đếm) và countBy(đếm theo nhóm)
        $answer_content = collect($answer_content);
        // Đếm tất cả
        $count_all = $answer_content->count();
        // Đếm gôm theo nhóm
        $count_by = $answer_content->countBy()->all();
        // Gán các dữ liệu vào $data
        foreach ($count_by  as $key => $value) {
            $ratio = round($value / $count_all, 2) * 100;   // Tính tỷ lệ (%), hàm round(..., 2) làm tròn 2 số thập phân
            $data[] = [
                'label' => $key,    // Câu trả lời (nhãn)
                'total' => $value,  // Tống số user chọn câu trả lời trên
                'ratio' => $ratio,  // Tỷ lệ (%) cho câu trả lời trên
            ];
            // lưu nhãn, dự trù
            $lable[] = $key;
        }
        // Thêm dữ liệu tổng vào cuối, $count_all(tổng số câu trả lời)
        $data[] = ['label' => 'Tổng', 'total' => $count_all, 'ratio' => 100];

        return $data;
    }

    public function export(Request $request)
    {
        $data = $request->get('data');
        $data = json_decode($data, true);

        return Excel::download(new QuestionsExport($data), 'Statictis.xlsx');
    }

    // Hàm hiển thị dữ liệu thống kê theo khảo sát ra
    public function show(Request $request)
    {
        $data = $this->answer_statistic($request);

        $data_json = json_encode($data);

        // $count_array = count($data);
        // foreach ($data as $key => $value) {
        //     if ($key < $count_array - 1) {
        //         foreach ($value as $key1 => $value1) {
        //             if ($key1 == 'label') {
        //                 $lables[] = $value1;
        //             }
        //             if ($key1 == 'total') {
        //                 $values[] = $value1;
        //             }
        //         }
        //     }
        // }

        // $chart = Charts::create('pie', 'highcharts')
        // ->labels($lables)
        // ->values($values)
        // ->dimensions(600, 500)
        // ->responsive(false);

        return view('pages.admins.statistic.show', ['data' => $data, 'data_json' => $data_json]);
    }

    public function student()
    {
        $register_graduate_pass = RegisterGraduate::count('user_id');
        $total_student = User::count('user_id');

        $course = User::select('course')->distinct()->get();
        $semester = 0;
        $per = ($register_graduate_pass / $total_student) * 100;

        $graduate_user = User::select('course')->distinct('course')->get();

        $pass = DB::table('users')->join('register_graduate', 'users.user_id', 'register_graduate.user_id')
        ->selectRaw('users.*, count(users.user_id) as countUsers')
        ->groupBy('users.course')
        ->orderByDesc('countUsers')
        ->get();
        // dd($pass);
        //danh sách khóa
        $total = DB::table('users')
        ->selectRaw('users.*, count(users.user_id) as countUsers')
        ->groupBy('users.course')
        ->orderByDesc('countUsers')
        ->get();
        // dd($graduate_user);
        $labels = $graduate_user->pluck('course');

        $values = $total->pluck('countUsers');

        $values2 = $pass->pluck('countUsers');

        return view('pages.admins.statistic.student', compact('labels', 'values', 'values2', 'register_graduate_pass', 'total_student', 'per', 'course', 'semester'));
    }

    public function course(Request $request)
    {
        if ($request->course == 'all') {
            $register_graduate_pass = RegisterGraduate::join('users', 'register_graduate.user_id', 'users.user_id')
        ->count();
            $total_student = User::count('user_id');
            $per = round($register_graduate_pass / $total_student, 2) * 100;
            $course = User::select('course')->distinct()->get();
            $semester = 0;
        } else {
            $register_graduate_pass = RegisterGraduate::join('users', 'register_graduate.user_id', 'users.user_id')
        // ->count('register_graduate.user_id')
        // ->having('users.course', '=', $request->year);
        ->where('users.course', '=', $request->course)
        ->count();
            $total_student = User::where('course', $request->course)
        ->count('user_id');
            $per = round($register_graduate_pass / $total_student, 2) * 100;
            $course = User::select('course')->distinct()->get();
            $semester = 0;
        }
        $graduate_user = User::select('course')->distinct('course')->get();

        $pass = DB::table('users')->join('register_graduate', 'users.user_id', 'register_graduate.user_id')
        ->selectRaw('users.*, count(users.user_id) as countUsers')
        ->groupBy('users.course')
        ->orderByDesc('countUsers')
        ->get();
        // dd($pass);
        //danh sách khóa
        $total = DB::table('users')
        ->selectRaw('users.*, count(users.user_id) as countUsers')
        ->groupBy('users.course')
        ->orderByDesc('countUsers')
        ->get();
        // dd($graduate_user);
        $labels = $graduate_user->pluck('course');

        $values = $total->pluck('countUsers');

        $values2 = $pass->pluck('countUsers');

        return view('pages.admins.statistic.student', compact('labels', 'values', 'values2', 'register_graduate_pass', 'total_student', 'per', 'course', 'semester'));
    }
}
