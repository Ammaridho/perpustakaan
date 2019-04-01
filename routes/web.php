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

Route::get('/buku', 'controllerBuku@list');
Route::get('/penulis', 'controllerPenulis@read');
Route::get('/penulis/bikin', 'controllerPenulis@create');
Route::get('/penulis/update', 'controllerPenulis@update');
Route::get('/penulis/edit', 'controllerPenulis@edit');
// Route::get('/penulis/delete', 'controllerPenulis@delete');
Route::post('/penulis/prosesBikin', 'controllerPenulis@prosesBikin');
Route::post('/penulis/prosesEdit', 'controllerPenulis@prosesEdit');
Route::get('/penulis/prosesHapus', 'controllerPenulis@prosesHapus');
