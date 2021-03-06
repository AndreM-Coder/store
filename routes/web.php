<?php

use Illuminate\Support\Facades\Auth;
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
    return view('frontend.welcome');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::post('upload-image', 'HomeController@upload')->name('upload-image');

Route::get('/view-products', 'ProductsController@main');
Route::get('/view-single-product', 'ProductsController@singleMain');

Auth::routes();
Route::get('users/today', 'UsersController@users_today')->middleware(['is_admin', 'auth'])->name('users-today');
Route::resource('pictures', 'PicturesController')->middleware(['is_admin', 'auth']);
Route::get('memes', 'PicturesController@memes')->middleware(['is_admin', 'auth'])->name('memes');
Route::get('admin/home', 'HomeController@admin')->middleware(['is_admin', 'auth'])->name('admin-home');
Route::resource('users', 'UsersController')->middleware(['is_admin', 'auth']);



Route::get('about', 'HomeController@about')->name('about');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::resource('products', 'ProductsController')->middleware(['is_admin', 'auth']);
Route::resource('shoppings', 'ShoppingController')->middleware(['is_admin', 'auth']);;
Route::resource('categories', 'CategoryController')->middleware(['is_admin', 'auth']);;
Route::resource('carts', 'CartController')->middleware(['is_admin', 'auth']);;