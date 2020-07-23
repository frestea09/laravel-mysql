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

Route::get('/','PizzaController@index');
Route::get('/getElementById/{id}','PizzaController@getElementById');
Route::get('/getElementByName/{name}','PizzaController@show');
Route::get('/form','PizzaController@showForm');
Route::post('/store','PizzaController@store');