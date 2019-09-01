<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Models\Survey;
use App\Models\Answer;
use App\Exports\AnswerExport;
use Excel;

class AnswerController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // public function validate()
    // {
    //     return view('pages.admins.survey.view');
    // }
    public function excel(Survey $survey)
    {
        // $question = Question::where('survey_id', $survey->survey_id)->get();
        // dd($question);
        // $answer_content3 = '';
        $title[] = array('Survey id', 'question', 'answer', 'created');
        $answer_content = Answer::select('answer_content')->where('survey_id', $survey->survey_id)->get();
        // dd($answer_content);
        foreach ($answer_content as $key) {
            // dd($key);
            $answer_content2[] = json_decode($key->answer_content, true);
            foreach ($answer_content2[0] as $key2 => $value2) {
                foreach ($value2 as $key3 => $value3) {
                    $title[] = array(
                        'Survey id' => '1',
                        'question' => 'a',
                        'answer' => $value3,
                        'created' => '2',
                    );
                    // print_r($value3);
                    // die;
                }
            }
            // print_r($answer_content2);
            // die;
            // $question[] = Question::where('question_id', $answer_content[$key])->get();
        }
        $question = 'a';
        $answer_created = Answer::select('created_at')->where('survey_id', $survey->survey_id)->get();
        Excel::download($value2, function ($excel) use ($title) {
            $excel->setTitle('Answer Data');
            $excel->sheet('Answer', function ($sheet) use ($title) {
                $sheet->fromArray($title, null, 'A1', false.false);
            });
        }, 'xlsx');
        // return Excel::download(new AnswerExport($survey->survey_id, $question, $answer_content3, $answer_created), 'answer.xlsx');
    }

    public function store(Request $request, Survey $survey)
    {
        // $false = false;
        // $true = true;
        // $sai = 'chưa check';
        // $dung = 'đúng';
        // $rong = 'rỗng';
        // $chuatraloi = 'Chưa trả lời';
        // // remove the token
        // $arr = $request->except('_token');
        // $dem = 0;
        // $count_request = count($arr);
        // //check chưa trả lời
        // if (empty($arr)) {
        //     dd($rong);
        // } else {
        //     //check chưa trả lời trong form có câu hỏi kiểu text
        //     foreach ($arr as $keyr => $valuer) {
        //         foreach ($valuer as $keyt => $valuet) {
        //             if ($valuet != null) {
        //                 break;
        //             } else {
        //                 ++$dem;
        //                 if ($dem == $count_request) {
        //                     dd($chuatraloi);
        //                 }
        //             }
        //         }
        //     }
        //     $count = 1;
        //     //tìm câu hỏi bắt buộc trả lời
        //     $ques = Question::where('survey_id', $survey->survey_id)->get();

        //     foreach ($ques as $key1 => $value1) {
        //         $question_mandatory = $value1->question_mandatory;
        //         $question_type = $value1->question_type;
        //         $mandatory_id = $value1->question_id;
        //         //duyệt mảng request
        //         foreach ($arr as $key2 => $value2) {
        //             //nếu câu hỏi bắt buộc trả lời
        //             if ($question_mandatory == 1) {
        //                 //nếu là kiểu checkbox hoặc radio=>không có request thì phải duyệt hết request xem có id không
        //                 if ($question_type == 'Checkbox' || $question_type == 'Radio') {
        //                     if (array_key_exists($mandatory_id, $arr) == false) {
        //                         dd($sai);
        //                     }
        //                 } else {
        //                     //kiểm tra $key của mảng request trả lời kiểu text,area có null không
        //                     if ($key2 == $mandatory_id) {
        //                         foreach ($value2 as $key3 => $value3) {
        //                             if ($value3 == null) {
        //                                 dd($key2);
        //                             }
        //                         }
        //                     }
        //                 }
        //             }
        //         }
        //     }
        // remove the token
        $arr = $request->except('_token');
        foreach ($arr as $key => $value) {
            $Answer = new Answer();
            $Question = Question::findOrFail($key);
            //check câu hỏi bắt buộc
            if (!is_array($value)) {
                $Value = $value[$key];
            } else {
                $Value = json_encode($arr, true);
            }
        }
        $Answer->insert([
            'survey_id' => $survey->survey_id,
            'user_id' => Auth::user()->user_id,
            'answer_content' => $Value,
            ]);

        return back()->with('success', 'Successful Survey!');
    }
}
