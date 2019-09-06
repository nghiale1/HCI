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
Route::get('/book', function () {
    return view('pages.admins.books.index');
    // Route::get('/create', "Master\BookController@create_render")->name('book.create');
});
// Route::prefix('book')->group(function () {
//     return view('pages.admins.books.create');
    // Route::get('/', "Master\BookController@index")->name('book.index');

    // Route::get('/create', "Master\BookController@create_render")->name('book.create');
    // Route::post('/create', "Master\BookController@create_submit")->name('book.create.submit');
// });
