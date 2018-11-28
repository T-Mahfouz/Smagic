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

view()->share(['resources' => url('').'/']);

Route::get('add-user','UI\UserController@addUser')->name('add-user');
Route::get('settings','UI\UserController@settings')->name('settings');


Route::get('login','UI\PublicController@login')->name('login');
