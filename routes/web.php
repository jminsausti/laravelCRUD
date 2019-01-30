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

Route::get('/tareas', 'TaskController@index');

Route::post('/tareas/actualizar', 'TaskController@update');

Route::post('/tareas/guardar', 'TaskController@store');

Route::post('/tareas/borrar/{id}', 'TaskController@destroy');

Route::get('/tareas/buscar', 'TaskController@show');