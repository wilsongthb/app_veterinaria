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

# app veterinaria urls
Route::get('/inicio', 'appController@index');
Route::get('/productor', 'appController@productor');
Route::get('/consultas', 'appController@function');
Route::get('/catalogo', 'appController@catalogo');
Route::get('/ajustes', 'appController@function');
Route::get('/comentarios', 'appController@function');
Route::get('/ayuda', 'appController@function');

Route::get('/map', function () { return view('app.map'); });

Auth::routes();

Route::get('/home', 'HomeController@index');
