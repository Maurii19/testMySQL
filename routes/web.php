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

Route::get('/', function () {
    return view('index');
});

Route::get('/select', 'MySQLController@selectUser');
Route::get('/insert', 'MySQLController@insertUser');
Route::get('/update', 'MySQLController@updateUser');
Route::get('/delete', 'MySQLController@deleteUser');
