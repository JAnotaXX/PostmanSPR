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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/envioC','HomeController@envioC')->name('envioC');
Route::get('/listaC','HomeController@listaC')->name('listaC');
Route::get('/generarPDF','CorrespondenciaEnvController@download')->name('generarPDF');
Route::post('/sendC', 'CorrespondenciaEnvController@guardar');
Route::get('/guardarData', 'CorrespondenciaEnvController@guardarData');
