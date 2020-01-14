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
route:: get('/nivel_de_urgencia', 'NivelDeUrgenciaController@listar');
route:: get('/nivel_de_urgencia/{id}', 'NivelDeUrgenciaController@obtenerUno');
Route::post('/nivel_de_urgencia', 'NivelDeUrgenciaController@agregar');
Route::put('/nivel_de_urgencia/{id}', 'NivelDeUrgenciaController@actualizar');
Route::delete('/nivel_de_urgencia/{id}', 'NivelDeUrgenciaController@borrar');

//api persona

route:: get('/personas', 'PersonaController@listar');
route:: get('/personas/{id}', 'PersonaController@obtenerUno');
Route::post('/personas', 'PersonaController@agregar');
Route::put('/personas/{id}', 'PersonaController@actualizar');
Route::delete('/personas/{id}', 'PersonaController@borrar');