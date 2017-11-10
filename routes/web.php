<?php
Route::view('/','frontend.index');


Route::group(['middleware' => 'OnlyAjax'],function(){
  Route::resource('post','PostController');
  Route::resource('kategori','KategoriController');
});

Route::group(['middleware' => 'Authentication'], function(){
  Route::view('/backend','backend.index');
});

Auth::routes();
