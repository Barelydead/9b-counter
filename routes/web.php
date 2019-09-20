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

// Climber routes
Route::get('/', 'ClimberController@index')->name('front');
Route::get('/climbers', 'ClimberController@index');
Route::get('/climbers/create', 'ClimberController@create')->middleware('auth');
Route::get('/climbers/{climber}', 'ClimberController@show');
Route::post('/climbers', 'ClimberController@store')->middleware('auth');
Route::get('/climbers/{climber}/edit', 'ClimberController@edit')->middleware('auth');
Route::patch('/climbers/{climber}', 'ClimberController@update')->middleware('auth');

// Route routes ;)
Route::get('/routes', 'RouteController@index');
Route::get('/routes/create', 'RouteController@create')->middleware('auth');
Route::get('/routes/{route}', 'RouteController@show');
Route::post('/routes', 'RouteController@store')->middleware('auth');
Route::get('/routes/{route}/edit', 'RouteController@edit')->middleware('auth');
Route::patch('/routes/{route}', 'RouteController@update')->middleware('auth');

// Auth routes
Route::get('/login', '\App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Admin routes
Route::get('/admin', 'AdminController@index')->name('admin');
