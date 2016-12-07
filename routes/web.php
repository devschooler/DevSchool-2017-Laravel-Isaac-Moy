<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('/post', 'PostController');
Auth::routes();

Route::resource('/event','EventController');
Auth::routes();
Route::resource('/admin','AdminController');
Auth::routes();
Route::resource('/profile','ProfileController');
Auth::routes();

Route::get('/home', 'HomeController@index');





