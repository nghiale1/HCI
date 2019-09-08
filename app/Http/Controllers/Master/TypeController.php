<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;

class TypeController extends Controller
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
            'model' => new Type(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_index($this->request);

        return view('pages.admins.types.index', ['data' => $data]);
    }

    // TODO: Mỗi function chỉ thực hiện 1 nhiệm vụ. Cho người khác dễ sửa chửa code của mình.

    // Hàm chỉ thực hiện chức năng Thêm thông qua Method = POST
    public function create_submit(Request $request)
    {
        $config = [
            'model' => new Type(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_insert($this->request);

        return redirect('type')->with('success', 'Added Successfully');
    }

    public function edit($type_id)
    {
        $type = Type::findOrFail($type_id);

        return view('pages.admins.types.edit', compact('type', 'type_id'));
    }

    public function update(Request $request, $type)
    {
        $type = Type::find($type_id);
        //TODO:  Nhan du lieu tu form cu
        $type->type_name = $request->get('type_name');
        $type->save();

        return redirect('type')->with('success', 'Updated Successfully');
    }

    public function destroy($type_id)
    {
        $data = Type::findOrFail($type_id);
        $data->delete();

        return redirect('type')->with('success', 'Deleted Successfully!');
    }
}
