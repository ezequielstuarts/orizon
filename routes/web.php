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
Route::get('novedades', 'NoticiasController@index')->name('novedades');

// Auth::routes();
Auth :: routes (['register' => false, 'confirm' => false, 'reset' => false]);




//Admin
Route::group(['middleware' => 'auth'], function ()
{
    Route::get('admin', 'Admin\AdminController@index');
    Route::resource('admin/noticias', 'Admin\NoticiasController');
    
    Route::get('admin/noticias-ocultas', 'Admin\NoticiasController@ocultas')->name('admin.noticias-ocultas');
    
    Route::get('admin/noticias/ocultar/{id}', 'Admin\NoticiasController@ocultar')->name('noticias.ocultar');
    Route::get('admin/noticias/mostrar/{id}', 'Admin\NoticiasController@mostrar')->name('noticias.mostrar');
    // Route::get('admin/noticias', 'Admin\NoticiasController@index')->name('noticias');
    // Route::get('admin/nueva-noticia', 'Admin\NoticiasController@create')->name('nueva-noticia');
});