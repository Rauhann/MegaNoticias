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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/contato', 'App\Http\Controllers\ContactController@index');
Route::get('/previsoes', 'App\Http\Controllers\ForecastController@index');
Route::post('/registrar', 'App\Http\Controllers\HomeController@register');
