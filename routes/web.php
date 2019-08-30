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

Route::get('/', 'ClimberController@index');
Route::get('/climbers', 'ClimberController@index');
Route::get('/climbers/{climber}', 'ClimberController@show');

Route::get('/routes', 'RouteController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
