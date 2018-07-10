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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/graficaspie', 'GraficasPieController@index')->name('graficaspie');
Route::get('/reportes', 'ReportesController@index')->name('reportes');
Route::post('/guardar', 'HomeController@guardar');
Route::get('/redirect', 'SocialController@redirect');
Route::get('/callback', 'SocialController@callback');
