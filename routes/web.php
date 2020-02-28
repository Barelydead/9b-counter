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
// Web routes
Route::get('/', 'ClimberController@index')->name('front');


Route::get('climbers', 'ClimberController@index');
Route::get('climbers/{climber}', 'ClimberController@show');

Route::get('routes', 'RouteController@index');
Route::get('routes/{route}', 'RouteController@show');

// Auth routes
Route::get('/login', '\App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Admin routes
Route::get('/admin', 'AdminController@index')->name('admin');
Route::resource('admin/climbers', '\App\Http\Controllers\Auth\ClimberCrudController');
Route::resource('admin/routes', '\App\Http\Controllers\Auth\RouteCrudController');
