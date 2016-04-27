<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {
    return "hola desde prueba";
});

//con parametros
Route::get('nombre/{nombre}', function ($nombre) {
    return "Mi nombre es ".$nombre;
});

//con default
Route::get('edad/{edad?}', function ($edad = 20) {
    return "Mi edad es ".$edad;
});

//con controllador
//Route::get('libro','PruebaController@index');

Route::resource('libro','LibroController');