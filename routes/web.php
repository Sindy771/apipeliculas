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

Route::get('api/bienvenido', function () {
    return view('welcome');
    Route::get('/api/cate','CategoriasController@index');
    Route::post('/api/cate/guardar','CategoriasController@store')->name('guardar');
    Route::put('/api/cate/actualizar','CategoriasController@update')->name('actualizar');
    Route::delete('/api/cate/eliminar','CategoriasController@delete')->name('eliminar');

    Route::get('/api/peli','PeliculasController@index');
    Route::post('/api/peli/guardar','PeliculasController@store')->name('guardar');
    Route::put('/api/peli/actualizar','PeliculasController@update')->name('actualizar');
    Route::delete('/api/peli/eliminar','PeliculasController@delete')->name('eliminar');

    Route::get('/api/prest','PrestamosController@index');
    Route::post('/api/prest/guardar','PrestamosController@store')->name('guardar');
    Route::put('/api/prest/actualizar','PrestamosController@update')->name('actualizar');
    Route::delete('/api/prest/eliminar','PrestamosController@delete')->name('eliminar');

    Route::get('/api/client','ClientesController@index');
    Route::post('/api/client/guardar','ClientesController@store')->name('guardar');
    Route::put('/api/client/actualizar','ClientesController@update')->name('actualizar');
    Route::delete('/api/client/eliminar','ClientesController@delete')->name('eliminar');
});
