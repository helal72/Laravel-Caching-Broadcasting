<?php

use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', 'cacheController@index')->name('cache');

Route::get('cache', 'cacheController@cache');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index')->name('post')->middleware('auth');
Route::post('/post', 'PostController@createPost')->middleware('auth');
