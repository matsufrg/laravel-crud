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

Auth::routes();

// views do UserController
Route::get('/users/update/{id}', ['middleware' => 'auth', 'uses' => 'UserController@view_update']);
Route::get('/users/register', ['middleware' => 'logged', 'uses' => 'UserController@view_register']);
Route::get('/users/home', ['middleware' => 'auth', 'as' => 'home', 'uses' => 'UserController@view_home']);
Route::get('/users/list', ['middleware' => 'admin', 'uses' => 'UserController@view_list']);
Route::get('/users/login', [ 'middleware' => 'logged', 'as' => 'login', 'uses' => 'UserController@view_login']);
Route::get('/users/trash', ['middleware' => 'admin', 'uses' => 'UserController@view_trash']);
Route::get('/users/delete/{id}', ['middleware' => 'auth', 'uses' => 'UserController@view_delete']);
// Route::get('/users', ['middleware' => 'auth', 'uses' => ''])

// fazendo o crud no banco 
Route::post('/users/register', 'UserController@register');
Route::post('/users/login', 'UserController@login');
Route::put('/users/update/{id}', ['middleware' => 'auth', 'uses' => 'UserController@update']);
Route::get('/users/delete/{id}', ['middleware' => 'auth', 'uses' => 'UserController@delete']);
Route::get('/users/restore/{id}', ['middleware' => 'auth', 'uses' => 'UserController@restoring']);
Route::get('/users/logout', ['middleware' => 'auth', 'as' => 'logout', 'uses' => 'UserController@logout']);

Route::resource('users', 'UserController');