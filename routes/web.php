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
//
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/book', function () {
//     return view('pages.admins.books.index');
// });
// route::get('books/create', function () {
//     return view('pages.admins.books.create');
// });
Route::get('/', function () {
    return view('pages.admins.books.index');
    // Route::get('/create', "Master\BookController@create_render")->name('book.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
    // Route::get('/', "Master\BookController@index")->name('book/index');
Route::group(['prefix' => 'author'], function () {
    Route::get('/', "Master\AuthorController@index")->name('author/index');

    Route::get('/create', "Master\AuthorController@create_render")->name('author/create');
    Route::post('/create', "Master\AuthorController@create_submit")->name('author/create/submit');
});
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
Route::prefix('category')->group(function () {
    Route::get('/', "Master\CategoryController@index")->name('category.index');
    //CREATE
    Route::get('/create/{type_id}', "Master\CategoryController@create_render")->name('category.create');
    Route::post('/create', "Master\CategoryController@create_submit")->name('category.create.submit');
    //CREATE VIEW CATEGORY
    Route::get('/create/view', "Master\CategoryController@create_render_view")->name('category.create.view');
    Route::post('/create/view', "Master\CategoryController@create_submit_view")->name('category.create.submit.view');
    // EDIT
    Route::get('/edit/{category_id}', 'Master\CategoryController@edit')->name('category.edit');
    Route::post('/edit/submit/{category_id}', 'Master\CategoryController@update')->name('category.edit.submit');
    // DELETE
    Route::post('/destroy/{category_id}', 'Master\CategoryController@destroy')->name('category.destroy');
});
Route::prefix('genre')->group(function () {
    Route::get('/', "Master\GenreController@index")->name('genre.index');
    //CREATE
    Route::get('/create/{category_id}', "Master\GenreController@create_render")->name('genre.create');
    Route::post('/create', "Master\GenreController@create_submit")->name('genre.create.submit');
    //CREATE VIEW GENRE
    Route::get('/create/direct', "Master\GenreController@create_render_direct")->name('genre.create.direct');
    Route::post('/create/direct', "Master\GenreController@create_submit_direct")->name('genre.create.submit.direct');
    // EDIT
    Route::get('/edit/{genre_id}', 'Master\GenreController@edit')->name('genre.edit');
    Route::post('/edit/submit/{genre_id}', 'Master\GenreController@update')->name('genre.edit.submit');
    // DELETE
    Route::post('/destroy/{genre_id}', 'Master\GenreController@destroy')->name('genre.destroy');
});

Route::prefix('book')->group(function () {
    Route::get('/', "Master\BookController@index")->name('book.index');

    Route::get('/create', "Master\BookController@create_render")->name('book.create');
    Route::post('/create', "Master\BookController@create_submit")->name('book.create.submit');
});
