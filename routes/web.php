<?php
Route::resource('/','HomeController');
Route::get('/skills','PageController@skills')->name('skills');
Route::get('/disclaimer','PageController@disclaimer')->name('disclaimer');
Route::get('/contact','PageController@contact')->name('contact');
Route::get('/terms-of-service','PageController@tos')->name('tos');
Route::get('/post/{slug}','PostController@show');
Route::get('/kategori/{kategori}','KategoriController@show');

Route::post('post-search','PostController@search');

Route::group(['middleware' => 'OnlyAjax'],function(){
  Route::resource('/backend-post','PostController');
  Route::resource('/backend-kategori','KategoriController');
});

Route::group(['middleware' => 'Authentication'], function(){
  Route::view('/backend','backend.index');
});


Auth::routes();
