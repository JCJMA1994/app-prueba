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

use App\Http\Controllers\PageController;

Route::get('/', 'PageController@inicio');

Route::get('pruebas','PageController@prueba') ->name('probando');

Route::get('blog','PageController@blogs')->name('bloger');

Route::get('nosotros/{nombre?}','PageController@nosotros')-> name('nosotros');

Route::get('notas','PageController@notas')->name('notas');

Route::get('notas/{id?}','PageController@detalle')->name('notas.detalle');

Route::post('notas','PageController@crear')->name('notas.crear');
