<?php

use Illuminate\Support\Facades\Route;
use App\Post;
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

Route::resource('contacts', 'ContactController');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/post/{post}', 'PostController@show')->name('post');

Route::middleware('auth')->group(function(){
    Route::get('/admin', 'AdminsController@index')->name('admin.index');
    Route::get('/admin/posts/create', 'PostController@create')->name('post.create');
    Route::get('/admin/category/create', 'CategoryController@create')->name('category.create');
    Route::post('/admin/category/store', 'CategoryController@store')->name('category.store');
    Route::resource('adminPost', 'AdminPostController');
    

});

 Route::get('logout', 'AdminsController@logout');
