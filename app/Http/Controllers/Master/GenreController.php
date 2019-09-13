<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Genre;

class GenreController extends Controller
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
            'model' => new Genre(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_index($this->request);

        return view('pages.admins.genres.index', ['data' => $data]);
    }

    // TODO: Mỗi function chỉ thực hiện 1 nhiệm vụ. Cho người khác dễ sửa chửa code của mình.
    public function add_render($category_id)
    {
        // dd($category_id);
        $category = Category::where('category_id', $category_id)->first();

        return view('pages.admins.genres.add', compact('category'));
    }

    // Hàm chỉ thực hiện chức năng Thêm thông qua Method = POST
    public function add_submit(Request $request)
    {
        $genre = Genre::insert([
            'category_id' => $request->query('category'),
            'genre_name' => $request->genre_name,
        ]);

        return redirect('genre')->with('success', 'Added Successfully');
    }

    public function create_render(Request $request)
    {
        $category = Category::all();

        return view('pages.admins.genres.create', compact('category'));
    }

    public function create_submit(Request $request)
    {
        $config = [
            'model' => new Genre(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_insert($this->request);

        return redirect('genre')->with('success', 'Added Successfully');
    }

    public function edit($genre_id)
    {
        $genre = Genre::findOrFail($genre_id);

        return view('pages.admins.genres.edit', compact('genre', 'genre_id'));
    }

    public function update(Request $request, $genre_id)
    {
        $genre = Genre::find($genre_id);
        //TODO:  Nhan du lieu tu form cu
        $genre->category_id = $request->get('category_id');
        $genre->genre_name = $request->get('genre_name');
        $genre->save();

        return redirect('genre')->with('success', 'Updated Successfully');
    }

    public function destroy($genre_id)
    {
        $data = Genre::findOrFail($genre_id);
        $data->delete();

        return redirect('genre')->with('success', 'Deleted Successfully!');
    }
}
