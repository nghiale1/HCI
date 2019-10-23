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
use App\Models\Image;
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
        $book = Book::all();

        return view('pages.customers.index', compact('book'));
    }

    //tạo code
    // $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!$%';
    // $random = substr(str_shuffle(str_repeat($pool, 5)), 0, 8);

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
        // dd($request->file('photos'));
        // dd($request);
        //kiểm tra có tồn tại myFikle ?
        if ($request->hasFile('avatar')) {
            $sale_id = Sale::insertGetId(
                array('sale_price' => $request->get('sale_price'))
                );

            $book_id = Book::insertGetId(array(
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
                ));
            $file_name = $request->file('avatar')->getClientOriginalName(); //Trả về tên file
            //lưu file
            $request->file('avatar')->move(
            'img/Product', //nơi cần lưu
            $file_name,
            );
            $avatar_path = Image::insertGetId(array(
                'image_path' => 'img.Product'.$file_name,
            ));
            BookImage::insert([
                'book_id' => $book_id,
                'image_id' => $avatar_path,
                'image_note' => 'Avatar',
            ]);
            if ($request->hasFile('photos')) {
                foreach ($request->file('photos') as $value) {
                    $file_name = $value->getClientOriginalName();
                    $value->move(
                        'img/Product', //nơi cần lưu
                        $file_name,
                        );
                    $hinhanh = Image::insertGetId(array(
                        'image_path' => 'img.Product'.$file_name,
                    ));
                    BookImage::insert([
                        'book_id' => $book_id,
                        'image_id' => $hinhanh,
                        'image_note' => 'Image',
                    ]);
                }
            }
            $this->validate($request, [
                'book_title' => 'required',
                'book_price' => 'required',
                'sale_price' => 'required',
           ]);

            return redirect('book')->with('success', 'Thêm sách thành công');
        } else {
            return bach()->with('error', 'Sách phải có hình ảnh');
        }
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

    public function destroy($book_id)
    {
        $data = Book::findOrFail($book_id);
        dd($data);
        $remove_image = Book::join('book_images', 'book_images.book_id', 'books.book_id')
        ->join('images', 'images.image_id', 'book_images.image_id')->get();

        $data->delete();
        // dd($data);
        return redirect('book')->with('success', 'Xóa thành công!');
    }
}
