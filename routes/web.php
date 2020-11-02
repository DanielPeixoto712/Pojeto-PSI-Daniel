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

Route::get('login','App\Http\Controllers\FormController@loginForm')->name('login.form');

Route::get('contactos','App\Http\Controllers\FormController@mostrarForm')->name('mostrar.form');

Route::post('contactos','App\Http\Controllers\FormController@processarForm')->name('processar.form');
Route::get('turbos','App\Http\Controllers\FormController@turbosForm')->name('turbos.form');

Route::get('empresa','App\Http\Controllers\FormController@empresaForm')->name('empresa.form');

Route::get('onde','App\Http\Controllers\FormController@ondeForm')->name('onde.form');

Route::get('noticias','App\Http\Controllers\FormController@noticiasForm')->name('noticias.form');

Route::get('welcome', function () {
    return view('welcome');
});