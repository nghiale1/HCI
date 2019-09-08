<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Author;

class AuthorController extends Controller
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
            'model' => new Author(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_index($this->request);

        return view('pages.admins.authors.index', ['data' => $data]);
    }

    // TODO: Mỗi function chỉ thực hiện 1 nhiệm vụ. Cho người khác dễ sửa chửa code của mình.
    // Hàm chỉ thực hiện đỗ ra trang Thêm
    public function create_render(Request $request)
    {
        return view('pages.admins.authors.create');
    }

    // Hàm chỉ thực hiện chức năng Thêm thông qua Method = POST
    public function create_submit(Request $request)
    {
        $config = [
            'model' => new Author(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_insert($this->request);
        // dd($data);
        return redirect('author/index')->with('success', 'Added Successfully');
    }

    public function edit($author_id)
    {
        $academy = Author::findOrFail($author_id);

        return view('pages.admins.authors.edit', compact('author', 'author_id'));
    }

    public function update(Request $request, $author_id)
    {
        $author = Author::find($author_id);
        //TODO:  Nhan du lieu tu form cu
        $author->author_name = $request->get('author_name');
        $author->author_info = $request->get('author_info');
        $author->save();
        // dd($academy);
        return redirect('author')->with('success', 'Updated Successfully');
    }

    public function destroy($author_id)
    {
        $data = Author::findOrFail($author_id);
        $data->delete();
        // dd($data);
        return redirect('author')->with('success', 'Deleted Successfully!');
    }
}
