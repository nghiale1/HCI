<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.customers.index');
    // Route::get('/', "Master\CustomerController@index")->name('customer/index');
});
Route::get('/404', function () {
    return view('pages.customers.404');
    // Route::get('/', "Master\CustomerController@index")->name('customer/index');
});
Route::get('/about', function () {
    return view('pages.customers.about');
    // Route::get('/', "Master\CustomerController@index")->name('customer/index');
});
Route::get('/cart', function () {
    return view('pages.customers.cart');
    // Route::get('/', "Master\CustomerController@index")->name('customer/index');
});
Route::get('/checkout', function () {
    return view('pages.customers.checkout');
    // Route::get('/', "Master\CustomerController@index")->name('customer/index');
});
Route::get('/contact', function () {
    return view('pages.customers.contact');
    // Route::get('/', "Master\CustomerController@index")->name('customer/index');
});
Route::get('/loginn', function () {
    return view('pages.customers.login');
    // Route::get('/', "Master\CustomerController@index")->name('customer/index');
});
Route::get('/my-account', function () {
    return view('pages.customers.my-account');
    // Route::get('/', "Master\CustomerController@index")->name('customer/index');
});
Route::get('/shop', function () {
    return view('pages.customers.shop');
    // Route::get('/', "Master\CustomerController@index")->name('customer/index');
});
Route::get('/single-product', function () {
    return view('pages.customers.single-product');
    // Route::get('/', "Master\CustomerController@index")->name('customer/index');
});
Route::get('/thank-you', function () {
    return view('pages.customers.thank-you');
    // Route::get('/', "Master\CustomerController@index")->name('customer/index');
});
Route::get('/wishlist', function () {
    return view('pages.customers.wishlist');
    // Route::get('/', "Master\CustomerController@index")->name('customer/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'author'], function () {
    Route::get('/', "Master\AuthorController@index")->name('author/index');

    Route::get('/create', "Master\AuthorController@create_render")->name('author/create');
    Route::post('/create', "Master\AuthorController@create_submit")->name('author/create/submit');
});
//Tác giả
Route::prefix('author')->group(function () {
    Route::get('/', "Master\AuthorController@index")->name('author.index');
    //CREATE
    Route::get('/create', "Master\AuthorController@create_render")->name('author.create');
    Route::post('/create', "Master\AuthorController@create_submit")->name('author.create.submit');
    // EDIT
    Route::get('/edit/{author_id}', 'Master\AuthorController@edit')->name('author.edit');
    Route::post('/edit/submit/{author_id}', 'Master\AuthorController@update')->name('author.edit.submit');
    // DELETE
    Route::post('/destroy/{author_id}', 'Master\AuthorController@destroy')->name('author.destroy');
});
//Nhà phát hành
Route::prefix('bookcompany')->group(function () {
    Route::get('/', "Master\BookCompanyController@index")->name('bookcompany.index');
    //CREATE
    Route::post('/create', "Master\BookCompanyController@create_submit")->name('bookcompany.create.submit');
    // EDIT
    Route::get('/edit/{book_company_id}', 'Master\BookCompanyController@edit')->name('bookcompany.edit');
    Route::post('/edit/submit/{book_company_id}', 'Master\BookCompanyController@update')->name('bookcompany.edit.submit');
    // DELETE
    Route::post('/destroy/{book_company_id}', 'Master\BookCompanyController@destroy')->name('bookcompany.destroy');
});
//Nhà xuất bản
Route::prefix('publishinghouse')->group(function () {
    Route::get('/', "Master\PublishingHouseController@index")->name('publishinghouse.index');
    //CREATE
    Route::post('/create', "Master\PublishingHouseController@create_submit")->name('publishinghouse.create.submit');
    // EDIT
    Route::get('/edit/{publishing_house_id}', 'Master\PublishingHouseController@edit')->name('publishinghouse.edit');
    Route::post('/edit/submit/{publishing_house_id}', 'Master\PublishingHouseController@update')->name('publishinghouse.edit.submit');
    // DELETE
    Route::post('/destroy/{publishing_house_id}', 'Master\PublishingHouseController@destroy')->name('publishinghouse.destroy');
});
//Thể loại
Route::prefix('type')->group(function () {
    Route::get('/', "Master\TypeController@index")->name('type.index');
    //CREATE
    Route::post('/create', "Master\TypeController@create_submit")->name('type.create.submit');
    // EDIT
    Route::get('/edit/{type_id}', 'Master\TypeController@edit')->name('type.edit');
    Route::post('/edit/submit/{type_id}', 'Master\TypeController@update')->name('type.edit.submit');
    // DELETE
    Route::post('/destroy/{type_id}', 'Master\TypeController@destroy')->name('type.destroy');
});
//Hạng mục
Route::prefix('category')->group(function () {
    Route::get('/', "Master\CategoryController@index")->name('category.index');
    //CREATE
    Route::get('/add/{type_id}', "Master\CategoryController@add_render")->name('category.add');
    Route::post('/add', "Master\CategoryController@add_submit")->name('category.add.submit');
    //CREATE VIEW CATEGORY
    Route::get('/create', "Master\CategoryController@create_render")->name('category.create');
    Route::post('/create', "Master\CategoryController@create_submit")->name('category.create.submit');
    // EDIT
    Route::get('/edit/{category_id}', 'Master\CategoryController@edit')->name('category.edit');
    Route::post('/edit/submit/{category_id}', 'Master\CategoryController@update')->name('category.edit.submit');
    // DELETE
    Route::post('/destroy/{category_id}', 'Master\CategoryController@destroy')->name('category.destroy');
});
//Thể loại nghệ thuật
Route::prefix('genre')->group(function () {
    Route::get('/', "Master\GenreController@index")->name('genre.index');
    //CREATE
    Route::get('/add/{category_id}', "Master\GenreController@add_render")->name('genre.add');
    Route::post('/add', "Master\GenreController@add_submit")->name('genre.add.submit');
    //CREATE VIEW GENRE
    Route::get('/create', "Master\GenreController@create_render")->name('genre.create');
    Route::post('/create', "Master\GenreController@create_submit")->name('genre.create.submit');
    // EDIT
    Route::get('/edit/{genre_id}', 'Master\GenreController@edit')->name('genre.edit');
    Route::post('/edit/submit/{genre_id}', 'Master\GenreController@update')->name('genre.edit.submit');
    // DELETE
    Route::post('/destroy/{genre_id}', 'Master\GenreController@destroy')->name('genre.destroy');
});
//Dịch giả
Route::prefix('tranlator')->group(function () {
    Route::get('/', "Master\TranlatorController@index")->name('tranlator.index');
    //CREATE
    Route::get('/create', "Master\TranlatorController@create_render")->name('tranlator.create');
    Route::post('/create', "Master\TranlatorController@create_submit")->name('tranlator.create.submit');
    // EDIT
    Route::get('/edit/{tranlator_id}', 'Master\TranlatorController@edit')->name('tranlator.edit');
    Route::post('/edit/submit/{tranlator_id}', 'Master\TranlatorController@update')->name('tranlator.edit.submit');
    // DELETE
    Route::post('/destroy/{tranlatorr_id}', 'Master\TranlatorController@destroy')->name('tranlator.destroy');
});
//Sách
Route::prefix('book')->group(function () {
    Route::get('/', "Master\BookController@index")->name('book.index');
    //CREATE
    Route::get('/create', "Master\BookController@create_render")->name('book.create');
    Route::post('/create', "Master\BookController@create_submit")->name('book.create.submit');
    // EDIT
    Route::get('/edit/{book_id}', 'Master\BookController@edit')->name('book.edit');
    Route::post('/edit/submit/{book_id}', 'Master\BookController@update')->name('book.edit.submit');
    // DELETE
    Route::post('/destroy/{book_id}', 'Master\BookController@destroy')->name('book.destroy');
});

// Route::prefix('customer')->group(function () {
//     Route::get('/', "Master\BookController@index")->name('customer.index');
//     //CREATE
//     Route::get('/create', "Master\BookController@create_render")->name('book.create');
//     Route::post('/create', "Master\BookController@create_submit")->name('book.create.submit');
//     // EDIT
//     Route::get('/edit/{book_id}', 'Master\BookController@edit')->name('book.edit');
//     Route::post('/edit/submit/{book_id}', 'Master\BookController@update')->name('book.edit.submit');
//     // DELETE
//     Route::post('/destroy/{book_id}', 'Master\BookController@destroy')->name('book.destroy');
// });
