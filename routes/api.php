<?php

use Illuminate\Http\Request;

Route::post('auth/login', 'ApiController@login');
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::resource('post', 'PostController');
});
