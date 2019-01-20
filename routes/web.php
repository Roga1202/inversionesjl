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

Route::get('/', 'IndexController@getindex');
Route::get('/home', 'IndexController@gethome');

Route::get('/prueba', 'IndexController@prueba');


//categoria

Route::get('/categoria/crear','CategoriaController@getcrear_categoria');
Route::post('/categoria/crear','CategoriaController@postcrear_categoria');
Route::get('/categoria/actualizar/{id}', 'CategoriaController@geteditar_categoria')->where('id', '[0-9]+');
Route::post('/categoria/actualizar/{id}', 'CategoriaController@posteditar_categoria')->where('id', '[0-9]+');
Route::post('/categoria/eliminar/{id}', 'CategoriaController@geteliminar_categoria')->where('id', '[0-9]+');

//producto


Route::get('/producto/crear','productoController@getcrear_producto');
Route::post('/producto/crear','productoController@postcrear_producto');
Route::get('/producto/actualizar/{id}', 'productoController@geteditar_producto')->where('id', '[0-9]+');
Route::post('/producto/actualizar/{id}', 'productoController@posteditar_producto')->where('id', '[0-9]+');
Route::post('/producto/eliminar/{id}', 'productoController@geteliminar_producto')->where('id', '[0-9]+');

?>
