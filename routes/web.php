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

Route::get('/', 'indexController@index');

Route::get('/Historia', 'indexController@historia');

Route::get('/Equipos','EquiposController@index');

Route::get('/Equipos/{equipo}','EquiposController@show');

Route::get('/Jugador/{codigo}', 'indexController@jugadores');