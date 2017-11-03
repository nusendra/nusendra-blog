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
    return 'Go to /backend for admin panel';
});

Route::view('/login','auth.login');

Route::group(['middleware' => 'Authentication'], function(){
  Route::view('/backend','index');
  Route::resource('kategori','KategoriController');
  Route::resource('post','PostController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
