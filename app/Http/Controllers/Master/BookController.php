<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Models\Book;
use App\Models\Author;
use App\Models\BookCompany;
use App\Models\PublishingHouse;
use App\Models\Tranlator;
use App\Models\Type;
use App\Models\Category;
use App\Models\Genre;

class BookController extends Controller
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
            'model' => new Book(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_index($this->request);

        return view('pages.admins.books.index', ['data' => $data]);
    }

    // TODO: Mỗi function chỉ thực hiện 1 nhiệm vụ. Cho người khác dễ sửa chửa code của mình.
    // Hàm chỉ thực hiện đỗ ra trang Thêm
    public function create_render(Request $request)
    {
        $author = Author::all();
        $book_company = BookCompany::all();
        $publishing_house = PublishingHouse::all();
        $tranlator = Tranlator::all();
        $type = Type::all();
        $category = Category::all();
        $genre = Genre::all();

        return view('pages.admins.books.create', compact('author', 'book_company', 'publishing_house', 'tranlator', 'type', 'category', 'genre'));
    }

    // Hàm chỉ thực hiện chức năng Thêm thông qua Method = POST
    public function create_submit(Request $request)
    {
        $sale_id = Sale::insertGetId(
            array('sale_price' => $request->get('sale_price'))
            );

        Book::insert([
        'book_title' => $request->get('book_title'),
        'book_description' => $request->get('book_description'),
        'book_price' => $request->get('book_price'),
        'book_releasedate' => $request->get('book_releasedate'),
        'book_form' => $request->get('book_form'),
        'book_pagenumber' => $request->get('book_pagenumber'),
        'book_size' => $request->get('book_size'),
        'book_weight' => $request->get('book_weight'),
        'author_id' => $request->get('author_id'),
        'tranlator_id' => $request->get('tranlator_id'),
        'publishing_house_id' => $request->get('publishing_house_id'),
        'book_company_id' => $request->get('book_company_id'),
        'sale_id' => $sale_id,
        ]);

        return redirect('book')->with('success', 'Added Successfully');
    }

    public function edit($academy_id)
    {
        $academy = Academy::findOrFail($academy_id);

        return view('pages.admins.sach.edit', compact('book', 'academy_id'));
    }

    public function update(Request $request, $academy_id)
    {
        $academy = Academy::find($academy_id);
        //TODO:  Nhan du lieu tu form cu
        $academy->academy_code = $request->get('academy_code');
        $academy->academy_name = $request->get('academy_name');
        $academy->academy_description = $request->get('academy_description');
        $academy->save();
        // dd($academy);
        return redirect('khoa-vien')->with('success', 'Updated Successfully');
    }

    public function destroy($academy_id)
    {
        $data = Academy::findOrFail($academy_id);
        $data->delete();
        // dd($data);
        return redirect('khoa-vien')->with('success', 'Deleted Successfully!');
    }
}
