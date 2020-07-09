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

Route::get('terms-and-conditions', function () {
    return view('terms&condition');
});
Route::get('ad', function () {
    return view('admin.dashboard');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('blog', function () {
    return view('blog.index');
});
Route::get('blog-create', function () {
    return view('blog.create');
});
Route::get('profile', function () {
    return view('profile.edit');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
