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

//categoria

Route::get('categoria/index','CategoriaController@getindex');
Route::get('categoria/crear','CategoriaController@getcrear_categoria');
Route::post('categoria/crear','CategoriaController@postcrear_categoria');
Route::get('categoria/actualizar/{id}', 'CategoriaController@geteditar_categoria')->where('id', '[0-9]+');
Route::post('categoria/actualizar/{id}', 'CategoriaController@posteditar_categoria')->where('id', '[0-9]+');
Route::get('categoria/eliminar/{id}', 'CategoriaController@geteliminar_categoria')->where('id', '[0-9]+');

//producto

Route::get('producto/index','ProductoController@getindex');
Route::get('producto/crear','ProductoController@getcrear_producto');
Route::post('producto/crear','ProductoController@postcrear_producto');
Route::get('producto/actualizar/{id}', 'ProductoController@geteditar_producto')->where('id', '[0-9]+');
Route::post('producto/actualizar/{id}', 'ProductoController@posteditar_producto')->where('id', '[0-9]+');
Route::get('producto/eliminar/{id}', 'ProductoController@geteliminar_producto')->where('id', '[0-9]+');

//cliente

Route::get('cliente/index','ClienteController@getindex');
Route::get('cliente/crear','ClienteController@getcrear_cliente');
Route::post('cliente/crear','ClienteController@postcrear_cliente');
Route::get('cliente/actualizar/{id}', 'ClienteController@geteditar_cliente')->where('id', '[0-9]+');
Route::post('cliente/actualizar/{id}', 'ClienteController@posteditar_cliente')->where('id', '[0-9]+');
Route::get('cliente/eliminar/{id}', 'ClienteController@geteliminar_cliente')->where('id', '[0-9]+');
Route::get('cliente/{id}', 'ClienteController@getcliente')->where('id', '[0-9]+');


//factura

Route::get('factura/crear','FacturaController@getindex');
Route::get('factura/crear','FacturaController@getcrear_factura');
Route::post('factura/crear','FacturaController@postcrear_factura');
Route::get('factura/detalle/{id}', 'FacturaController@getdetalle')->where('id', '[0-9]+');
Route::get('factura/index', 'FacturaController@getindex')->where('id', '[0-9]+');
Route::get('/factura/pdf/{id}', 'FacturaController@getpdf')->where('id', '[0-9]+');
Route::get('factura/eliminar/{id}', 'FacturaController@geteliminar_factura')->where('id', '[0-9]+');


// utilidad
Route::get('/ciudad/{id}', 'IndexController@getciudad')->where('id', '[0-9]+');
Route::get('/ciudades/{id}', 'IndexController@getciudades')->where('id', '[0-9]+');

Route::get('/estado/{id}', 'IndexController@getestado')->where('id', '[0-9]+');

Route::get('/factura/findCliente', 'FacturaController@findCliente');
Route::get('/factura/findProducto', 'FacturaController@findProducto');

Route::get('/producto/{id}', 'IndexController@getproducto')->where('id', '[0-9]+');

Route::fallback('IndexController@get404');

?>
