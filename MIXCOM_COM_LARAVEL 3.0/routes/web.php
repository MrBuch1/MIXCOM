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

Route::get('/', function () { return view('index'); });
Route::get('/Produto/Catraca', function () { return view('produto-principal'); });
Route::get('/Produtos', function () { return view('produto-catraca'); });
Route::get('/nada', function (){return view('button_full'); });
Auth::routes();
Route::get('/home', 'HomeController@index');
