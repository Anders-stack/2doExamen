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
Route::get('ver', function () {
    return view('codigo');
});
Route::get('codigo', 'SolucionController@codigo');
Route::post('solucion',['as'=> 'codigo.solucion', 'uses'=>'SolucionController@solucion']);