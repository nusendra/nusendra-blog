<?php
Route::view('/','frontend.index');

Route::resource('post','PostController');
Route::resource('kategori','KategoriController');

Route::group(['middleware' => 'Authentication'], function(){
  Route::view('/backend','backend.index');
});

Auth::routes();
