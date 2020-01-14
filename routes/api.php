<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
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


