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
    return view('index');
});

Route::get('/form', 'RegisterController@form');

Route::get('/welcome', 'RegisterController@welcome');

Route::post('/welcome', 'RegisterController@welcome_post');