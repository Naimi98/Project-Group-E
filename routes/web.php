<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::group(['middleware' => ['auth', 'role:librarian']], function() {
    Route::get('/create_book', 'App\Http\Controllers\LibrarianController@create')->name('create_book');
});

Route::group(['middleware' => ['auth', 'role:librarian']], function() {
    Route::get('/view_book', 'App\Http\Controllers\LibrarianController@view')->name('view_book');
});
Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::get('/list_book', 'App\Http\Controllers\StudentController@view')->name('list_book');
});

Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::get('/create_user', 'App\Http\Controllers\StudentController@create')->name('create_user');
});

Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::get('/view_user', 'App\Http\Controllers\StudentController@view')->name('view_user');
});

// Route::get('/book_create', function () {
//     return view('librarian.book_create');
// });

// Route::get('/book_view', function () {
//     return view('librarian.book_view');
// });

// Route::get('/book_view', function () {
//     return view('librarian.library');
// });

Route::post('\store','app\Http\Controllers\BookController@store');

require __DIR__.'/auth.php';
