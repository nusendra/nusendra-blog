<?php
Route::resource('/','HomeController');
Route::view('skills','frontend.page.skill');
Route::view('disclaimer','frontend.page.disclaimer');
Route::view('contact','frontend.page.contact');

Route::group(['middleware' => 'OnlyAjax'],function(){
  Route::resource('post','PostController');
  Route::resource('kategori','KategoriController');
});

Route::group(['middleware' => 'Authentication'], function(){
  Route::view('/backend','backend.index');
});



Auth::routes();
