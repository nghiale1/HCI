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
use App\Models\User;
use App\Models\BookImage;
use App\Models\Category;
use App\Models\GenreBook;
use App\Models\Genre;

class LoginController extends Controller
{
    // Hàm khởi tạo.
    public function __construct()
    {
        parent::__construct();
    }

    // Hàm đỗ dữ liệu của một Khoa ra trang index
    public function login(Request $request)
    {
        return view('Auth.login');
    }

    public function post_login(Request $request)
    {
        // dd($request);
        $email = $request->email;
        $password = md5($request->password);
        // $password = bcrypt($request->password);
        // dd($password);
        $check = User::where([['user_mail', $email], ['user_password', $password]])->first();
        // $check = User::where('user_mail', $email)->first();
        // dd($check);
        if ($check != null) {
        } else {
        }
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
                'image_path' => 'img/Product/'.$file_name,
            ));
            BookImage::insert([
                'book_id' => $book_id,
                'image_id' => $avatar_path,
                'image_note' => 'Avatar',
            ]);
            GenreBook::insert([
                'genre_id' => $request->genre_id,
                'book_id' => $book_id,
            ]);
            if ($request->hasFile('photos')) {
                foreach ($request->file('photos') as $value) {
                    $file_name = $value->getClientOriginalName();
                    $value->move(
                        'img/Product', //nơi cần lưu
                        $file_name,
                        );
                    $hinhanh = Image::insertGetId(array(
                        'image_path' => 'img/Product/'.$file_name,
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

    public function edit($book_id)
    {
        $publishing_house = PublishingHouse::all();
        $book_company = BookCompany::all();
        $genre = Genre::all();
        $book = Book::join('sales', 'sales.sale_id', 'books.sale_id')
        ->join('authors', 'authors.author_id', 'books.author_id')
        ->leftJoin('tranlators', 'tranlators.tranlator_id', 'books.tranlator_id')
        ->join('publishing_houses', 'publishing_houses.publishing_house_id', 'books.publishing_house_id')
        ->join('book_companies', 'book_companies.book_company_id', 'books.book_company_id')
        ->join('genre_books', 'genre_books.book_id', 'books.book_id')
        ->join('genres', 'genres.genre_id', 'genre_books.genre_id')
        ->join('book_images', 'book_images.book_id', 'books.book_id')
        ->join('images', 'images.image_id', 'book_images.image_id')
        ->where([['books.book_id', $book_id], ['book_images.image_note', 'Avatar']])->first();

        $image = Book::join('book_images', 'book_images.book_id', 'books.book_id')
        ->join('images', 'images.image_id', 'book_images.image_id')
        ->where([['books.book_id', $book_id], ['book_images.image_note', 'Image']])->get();
        // dd($book);
        // dd($image[0]);
        // dd($image[0]->image_path);
        // $book = Book::findOrFail($book_id);

        return view('pages.admins.books.edit', compact('book', 'book_id', 'genre', 'publishing_house', 'book_company', 'image'));
    }

    public function update(Request $request, $book_id)
    {
        dd($request);
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
        $remove_image = Book::join('book_images', 'book_images.book_id', 'books.book_id')
        ->join('images', 'images.image_id', 'book_images.image_id')->get();
        BookImage::where('book_image_id', $remove_image->book_image_id)->delete();
        Image::where('image_id', $remove_image->image_id)->delete();
        $data->delete();
        // dd($data);
        return redirect('book')->with('success', 'Xóa thành công!');
    }
}
