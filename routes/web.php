<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('home', function () {
    return view('index');
});
Route::get('nosotros', function () {
    return view('nosotros');
});
Route::get('nuestros-productos', function () {
    return view('nuestros-productos');
});
Route::get('donde-estamos', function () {
    return view('donde-estamos');
});
Route::get('puntos-de-venta', function () {
    return view('puntos-de-venta');
});

Auth::routes();

Route::get('/novedades', 'NoticiasController@index')->name('novedades');
// Route::get('/home', 'HomeController@index')->name('home');
