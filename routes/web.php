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

Route::get('/', function () {return view('index');});
Route::get('home', function () {return view('index');});
Route::get('nosotros', function () {return view('nosotros');});
Route::get('nuestros-productos', function () {return view('nuestros-productos');});
Route::get('donde-estamos', function () {return view('donde-estamos');});
Route::get('puntos-de-venta', function () {return view('puntos-de-venta');});
Route::get('contacto', function () {return view('contacto');});

Route::get('novedades', 'NoticiasController@index')->name('novedades');

Route::post('enviar-contacto', "ContactController@enviar")->name('enviar-contacto');
Route::post('enviar-contacto-ventas', "ContactController@ventas")->name('enviar-contacto-ventas');

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

    Route::get('admin/mensajes', 'Admin\MensajesController@index');



    // Route::resource('/api/getMensajes', 'Admin\Api\MensajesController');
    // Route::get('/api/getMensajesVentas', 'Admin\ApiController@getMensajesVentas');
});

    Route::apiResource('api/mensajes', 'Admin\api\MensajeController');
Route::get('/init', function () {
    Artisan::call('storage:link');
    return 'ready!';
});
