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
Route::post('login','LoginController@login');
Route::get('logout','LoginController@logout');
Route::get('/', function () {
    return view('login');
});

Route::get('cliente','ClienteController@cliente');
Route::get('dashboard','AdministradorCOntroller@index');
Route::get('reservas','ClienteController@reservas');
Route::get('renovacion','ClienteController@renovacion');
Route::get('pagos','ClienteController@pagos');
Route::get('chatbot','ClienteController@chatbot');
Route::get('promociones','ClienteController@promociones');
Route::get('informacion','ClienteController@informacion');
Route::get('dashboard', function () {
    return view('dashboard');
});

/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/