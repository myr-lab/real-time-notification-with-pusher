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
    return view('welcome');
});

//Cache Controller
Route::get('user','CacheController@index')->name('cache');

Route::get('/cache', 'CacheController@cache');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Real tile message showoing route
Route::get('/post', 'PostController@index')->name('post')->middleware('auth');
Route::post('/post', 'PostController@createPost')->middleware('auth');