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


// Climber routes
/*
|        | GET|HEAD  | climbers                      | climbers.index        | App\Http\Controllers\ClimberController@index                  | web
|        | POST      | climbers                      | climbers.store        | App\Http\Controllers\ClimberController@store                  | web
|        | GET|HEAD  | climbers/create               | climbers.create       | App\Http\Controllers\ClimberController@create                 | web
|        | DELETE    | climbers/{climber}            | climbers.destroy      | App\Http\Controllers\ClimberController@destroy                | web
|        | PUT|PATCH | climbers/{climber}            | climbers.update       | App\Http\Controllers\ClimberController@update                 | web
|        | GET|HEAD  | climbers/{climber}            | climbers.show         | App\Http\Controllers\ClimberController@show                   | web
|        | GET|HEAD  | climbers/{climber}/edit       | climbers.edit         | App\Http\Controllers\ClimberController@edit                   | web
*/
Route::resource('climbers', 'ClimberController');

// Route routes ;)
/*
|        | GET|HEAD  | routes                        | routes.index          | App\Http\Controllers\RouteController@index                    | web
|        | POST      | routes                        | routes.store          | App\Http\Controllers\RouteController@store                    | web
|        | GET|HEAD  | routes/create                 | routes.create         | App\Http\Controllers\RouteController@create                   | web
|        | GET|HEAD  | routes/{route}                | routes.show           | App\Http\Controllers\RouteController@show                     | web
|        | PUT|PATCH | routes/{route}                | routes.update         | App\Http\Controllers\RouteController@update                   | web
|        | DELETE    | routes/{route}                | routes.destroy        | App\Http\Controllers\RouteController@destroy                  | web
|        | GET|HEAD  | routes/{route}/edit           | routes.edit           | App\Http\Controllers\RouteController@edit                     | web
*/
Route::resource('routes', 'RouteController');

// Auth routes
Route::get('/login', '\App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Admin routes
Route::get('/admin', 'AdminController@index')->name('admin');
