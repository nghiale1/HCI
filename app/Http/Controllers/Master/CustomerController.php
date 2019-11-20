<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Genre;

class CustomerController extends Controller
{
    // Hàm khởi tạo.
    public function __construct()
    {
        parent::__construct();
    }

    // Hàm đỗ dữ liệu của trang index
    public function index(Request $request)
    {
        $book = Book::join('book_images', 'book_images.book_id', 'books.book_id')
        ->join('images', 'images.image_id', 'book_images.image_id')
        ->join('sales', 'sales.sale_id', 'books.sale_id')
        ->where('book_images.image_note', 'Avatar')->get();

        return view('pages.customers.index', compact('book'));
    }

    public function shop(Request $request)
    {
        $book = Book::join('book_images', 'book_images.book_id', 'books.book_id')
        ->join('images', 'images.image_id', 'book_images.image_id')
        ->join('sales', 'sales.sale_id', 'books.sale_id')
        ->where('book_images.image_note', 'Avatar')->get();

        return view('pages.customers.shop', compact('book'));
    }

    public function index2(Request $request)
    {
        $book = Book::join('book_images', 'book_images.book_id', 'books.book_id')
        ->join('images', 'images.image_id', 'book_images.image_id')
        ->join('sales', 'sales.sale_id', 'books.sale_id')
        ->where('book_images.image_note', 'Avatar')->get();
        $category = Category::all();
        foreach ($category as $cate) {
            $genre[$cate->category_id] = Genre::where('category_id', $cate->category_id)->get();
            $count[$cate->category_id] = Genre::where('category_id', $cate->category_id)->count();
        }
        // dd($genre[1]);

        return view('pages.customers.index2', compact('book', 'category', 'genre', 'count'));
    }
    public function wishlist(Request $request){
        $book = Book::join('book_images', 'book_images.book_id', 'books.book_id')
        ->join('images', 'images.image_id', 'book_images.image_id')
        ->join('sales', 'sales.sale_id', 'books.sale_id')
        ->where('book_images.image_note', 'Avatar')->get();
        $category = Category::all();
        foreach ($category as $cate) {
            $genre[$cate->category_id] = Genre::where('category_id', $cate->category_id)->get();
            $count[$cate->category_id] = Genre::where('category_id', $cate->category_id)->count();
        }
        // dd($genre[1]);

        return view('pages.customers.wishlist', compact('book', 'category', 'genre', 'count'));
    }

    public function single($book_id)
    {
        $detail_book = Book::join('sales', 'sales.sale_id', 'books.sale_id')
        ->join('authors', 'authors.author_id', 'books.author_id')
        ->leftjoin('tranlators', 'tranlators.tranlator_id', 'books.tranlator_id')
        ->join('book_companies', 'book_companies.book_company_id', 'books.book_company_id')
        ->join('publishing_houses', 'publishing_houses.publishing_house_id', 'books.publishing_house_id')
        ->where('books.book_id', $book_id)
        ->first();

        $book = Book::join('book_images', 'book_images.book_id', 'books.book_id')
        ->join('images', 'images.image_id', 'book_images.image_id')
        ->join('sales', 'sales.sale_id', 'books.sale_id')
        ->where('book_images.image_note', 'Avatar')
        ->get();

        $book_avatar = Book::join('book_images', 'book_images.book_id', 'books.book_id')
        ->join('images', 'images.image_id', 'book_images.image_id')
        ->join('sales', 'sales.sale_id', 'books.sale_id')
        ->where([['book_images.image_note', 'Avatar'], ['books.book_id', $book_id]])
        ->first();
        $book_image = Book::join('book_images', 'book_images.book_id', 'books.book_id')
        ->join('images', 'images.image_id', 'book_images.image_id')
        ->join('sales', 'sales.sale_id', 'books.sale_id')
        ->where([['book_images.image_note', 'Image'], ['books.book_id', $book_id]])
        ->get();
        // dd($book_image->isEmpty());
        if ($book_image->isEmpty() == true) {
            $book_image = null;
        }
        // dd(isset($book_image));

        return  view('pages.customers.single-product', compact('book_avatar', 'book_image', 'book', 'detail_book'));
    }
}
