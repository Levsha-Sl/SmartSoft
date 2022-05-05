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

Route::get('/', 'ProductController@index')->name('home');
Route::get('/product/{slug}', 'ProductController@show')->name('products.single');
Route::get('/category/{slug}', 'CategoryController@show')->name('categories.single');
Route::get('/category', 'CategoryController@index')->name('categories');
Route::get('/tops', 'CategoryController@tops')->name('categories.tops');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', 'TagController');
    Route::resource('/products', 'ProductController');
    Route::resource('/slides', 'CarouselController');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');

    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login.store');
});

Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');
