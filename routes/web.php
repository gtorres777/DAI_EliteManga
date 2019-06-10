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


Route::view('/principal','principal');

Route::view('/usuario','usuario');

Route::view('/anime','anime');

Route::view('/productos','Productos');

Route::view('/compras','Compras');

Route::view('/manga','manga');

Route::view('/seleccion','seleccion');

Route::view('/tienda','tienda');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

