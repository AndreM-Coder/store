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
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');
Route::post('upload-image', 'HomeController@upload')->name('upload-image');

Auth::routes();
Route::get('users/today', 'UsersController@users_today')->middleware(['is_admin', 'auth'])->name('users-today');
Route::resource('pictures', 'PicturesController')->middleware(['is_admin', 'auth']);
Route::get('memes', 'PicturesController@memes')->middleware(['is_admin', 'auth'])->name('memes');
Route::get('admin/home', 'HomeController@admin')->middleware(['is_admin', 'auth'])->name('admin-home');
Route::resource('users', 'UsersController')->middleware(['is_admin', 'auth']);


Route::resource('products', 'ProductsController');

Route::resource('shoppings', 'ShoppingController');

Route::resource('categories', 'CategoryController');

Route::resource('carts', 'CartController');