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
Route::get('/climbers/{climber}', 'ClimberController@show');

// Route routes ;)
Route::get('/routes', 'RouteController@index');

// Auth routes
Auth::routes(['register' => false]);

// Admin routes
Route::get('/admin', 'AdminController@index')->name('admin');
