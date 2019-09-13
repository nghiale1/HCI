<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tranlator;

class TranlatorController extends Controller
{
    // Hàm khởi tạo.
    public function __construct()
    {
        parent::__construct();
    }

    // Hàm đỗ dữ liệu của một Khoa ra trang index
    public function index(Request $request)
    {
        $config = [
            'model' => new Tranlator(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_index($this->request);

        return view('pages.admins.tranlators.index', ['data' => $data]);
    }

    // TODO: Mỗi function chỉ thực hiện 1 nhiệm vụ. Cho người khác dễ sửa chửa code của mình.
    // Hàm chỉ thực hiện đỗ ra trang Thêm
    public function create_render(Request $request)
    {
        return view('pages.admins.tranlators.create');
    }

    // Hàm chỉ thực hiện chức năng Thêm thông qua Method = POST
    public function create_submit(Request $request)
    {
        $config = [
            'model' => new Tranlator(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_insert($this->request);
        // dd($data);
        return redirect('tranlator')->with('success', 'Added Successfully');
    }

    public function edit($tranlator_id)
    {
        $tranlator = Tranlator::findOrFail($tranlator_id);

        return view('pages.admins.tranlators.edit', compact('tranlator', 'tranlator_id'));
    }

    public function update(Request $request, $tranlator_id)
    {
        $tranlator = Tranlator::find($tranlator_id);
        //TODO:  Nhan du lieu tu form cu
        $tranlator->tranlator_name = $request->get('tranlator_name');
        $tranlator->tranlator_info = $request->get('tranlator_info');
        $tranlator->save();
        // dd($academy);
        return redirect('tranlator')->with('success', 'Updated Successfully');
    }

    public function destroy($tranlator_id)
    {
        $data = Tranlator::findOrFail($tranlator_id);
        $data->delete();
        // dd($data);
        return redirect('tranlator')->with('success', 'Deleted Successfully!');
    }
}
