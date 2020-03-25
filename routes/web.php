<?php

use Illuminate\Support\Facades\Hash;
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
Route::get('/', 'CounterController@index')->name('front');

// Climber model routes
Route::resource('climbers', 'ClimberController', [
  'names' => [
      'index' => 'climbers.index',
      'create' => 'climbers.create',
      'show' => 'climbers.show',
      'store' => 'climbers.store',
      'update' => 'climbers.update',
      'edit' => 'climbers.edit',
      'destroy' => 'climbers.destroy',
  ]
]);

Route::get('admin/climbers', 'ClimberController@adminIndex')->name('climbers.admin-index');

// Route model routes
Route::resource('routes', 'RouteController', [
  'names' => [
      'index' => 'routes.index',
      'create' => 'routes.create',
      'show' => 'routes.show',
      'store' => 'routes.store',
      'update' => 'routes.update',
      'edit' => 'routes.edit',
      'destroy' => 'routes.destroy',
  ]
]);

Route::get('admin/routes', 'RouteController@adminIndex')->name('routes.admin-index');

// Route model routes
Route::resource('counters', 'CounterController', [
  'names' => [
      'index' => 'counters.index',
      'create' => 'counters.create',
      'show' => 'counters.show',
      'store' => 'counters.store',
      'update' => 'counters.update',
      'edit' => 'counters.edit',
      'destroy' => 'counters.destroy',
  ]
]);

Route::get('admin/counters', 'CounterController@adminIndex')->name('counters.admin-index');;

// Route model routes
Route::resource('counter-rows', 'CounterRowController', [
  'names' => [
      'index' => 'counterRows.index',
      'create' => 'counterRows.create',
      'show' => 'counterRows.show',
      'store' => 'counterRows.store',
      'update' => 'counterRows.update',
      'edit' => 'counterRows.edit',
      'destroy' => 'counterRows.destroy',
  ]
]);

Route::get('admin/counter-rows', 'CounterRowController@adminIndex')->name('counterRows.admin-index');

// Auth routes
Route::get('/login', '\App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Admin routes
Route::get('/admin', 'AdminController@index')->name('admin');
