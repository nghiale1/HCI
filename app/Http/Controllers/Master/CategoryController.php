<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Type;

class CategoryController extends Controller
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
            'model' => new Category(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_index($this->request);

        return view('pages.admins.categories.index', ['data' => $data]);
    }

    // TODO: Mỗi function chỉ thực hiện 1 nhiệm vụ. Cho người khác dễ sửa chửa code của mình.
    public function add_render($type_id)
    {
        $type = Type::where('type_id', $type_id)->first();

        return view('pages.admins.categories.add', compact('type'));
    }

    // Hàm chỉ thực hiện chức năng Thêm thông qua Method = POST
    public function add_submit(Request $request)
    {
        $category = Category::insert([
            'type_id' => $request->query('type'),
            'category_name' => $request->category_name,
        ]);

        return redirect('category')->with('success', 'Added Successfully');
    }

    public function create_render(Request $request)
    {
        $type = Type::all();

        return view('pages.admins.categories.create', compact('type'));
    }

    public function create_submit(Request $request)
    {
        $config = [
            'model' => new Category(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_insert($this->request);

        return redirect('category')->with('success', 'Added Successfully');
    }

    public function edit($category_id)
    {
        $category = Category::findOrFail($category_id);

        return view('pages.admins.categories.edit', compact('category', 'category_id'));
    }

    public function update(Request $request, $category_id)
    {
        $category = Category::find($category_id);
        //TODO:  Nhan du lieu tu form cu
        $category->category_name = $request->get('category_name');
        $category->save();

        return redirect('category')->with('success', 'Updated Successfully');
    }

    public function destroy($category_id)
    {
        $data = Category::findOrFail($category_id);
        $data->delete();

        return redirect('category')->with('success', 'Deleted Successfully!');
    }
}
