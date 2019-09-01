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
Route::post('/climbers', 'ClimberController@store');

// Route routes ;)
Route::get('/routes', 'RouteController@index');
Route::get('/routes/create', 'RouteController@create');
Route::post('/routes', 'RouteController@store');

// Auth routes
Route::get('/login', '\App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Admin routes
Route::get('/admin', 'AdminController@index')->name('admin');
