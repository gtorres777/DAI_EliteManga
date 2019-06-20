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

Route::get('/', 'MangaController@index')->name('principal');

Route::get('/manga/{id?}/{name?}', 'MangaController@show')->name('mangas');

Route::get('/genero/{genero}', 'MangaController@genero')->name('genero');

Route::get('/capitulo/{idmanga}/{idcapitulo}', 'CapituloController@show')->name('capitulos');

Route::get('/agregarC/{id}', 'CapituloController@cargarCapitulo')->name('agregarcapitulo');

Route::get('/agregarM', 'CapituloController@cargarManga')->name('cargarmanga');

Route::post('/agregarManga', 'CapituloController@storeManga')->name('agregarmanga');

Route::post('/agregarCapitulo/{id}', 'CapituloController@store');

Route::get('/home', 'HomeController@index')->name('home');


// productos

Route::get('/agregarP', 'ProductoController@create')->name('crearproducto');

Route::post('/agregarProducto', 'ProductoController@store')->name('agregarproducto');



Route::get('/tienda', 'ProductoController@index')->name('tienda');

Route::get('/producto/{id}', 'ProductoController@show')->name('productos');

Route::get('/comprar/{id}', 'UserController@comprar')->name('comprar');


Route::get('/productos/{nombre}', 'ProductoController@especificar')->name('especificos');


Route::get('/principal', 'MangaController@buscar');

Auth::routes();

Route::view('/usuario','usuario')->name('usuario');

//user

Route::get('/perfil', 'UserController@verPerfil')->name('perfil');

Route::get('edit/{id}', 'UserController@edit')->name('useredit');

Route::put('/edit', 'UserController@update');

Route::get('/eliminarperfil/{userId}', 'UserController@eliminarPerfil');

Route::post('/actualizarfoto/{id}', 'UserController@cambiarFoto')->name('cambiarfoto');

Route::get('/favoritos/{id}/{nombremanga}', 'MangaController@agregar')->name('agregarfavoritos');

Route::get('/eliminarFavoritos/{i}', 'MangaController@eliminarFavoritos');

Route::get('/pedidos', 'UserController@pedidos');



//Carrito

Route::get('/carrito', 'CarritoController@show')->name('carrito');

Route::get('/carrito/{id}', 'CarritoController@agregar');

Route::get('/carrito/actualizar/{id}', 'CarritoController@update');

Route::get('/carrito/borrar/{id}', 'CarritoController@delete');

Route::get('/car/borradoTodo', 'CarritoController@deletetodo')->name('trash');

//compras

Route::get('/compras', 'CompraController@compras')->name('compras');

Route::post('/compras/cambiarform2', 'CompraController@cambiarFormulario');

Route::post('/compras/cambiarformfinal/f', 'CompraController@cambiarFormularioFinal')->name('formulariofinal');

Route::get('/Comprafinalizada', 'CompraController@guardarCompra')->name('realizarcompra');



Route::get('prra','CarritoController@delete');




