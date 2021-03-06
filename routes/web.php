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
Route::get('/ganado/{id}', 'appController@ganado');
Route::get('/ajustes', 'appController@function');
Route::get('/comentarios', 'appController@function');
Route::get('/ayuda', 'appController@ayuda');

# ruta del mapa de la app
Route::get('/map', function () { return view('app.map'); });

Auth::routes();

Route::get('/home', 'HomeController@index');
