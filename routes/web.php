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

// Route::get('/', function () {
//     return view('welcome');
// });

//home index
Route::get('/', 'BlogController@index');
// settings
Route::get('/settings','BlogController@setting');
//create 1. pindah ke form dl, 2.lakukan store di function lain
Route::get('/create', 'BlogController@create');
Route::post('/', 'BlogController@store');
//detail
Route::get('/{id}', 'BlogController@show');
//update 1.pindah ke form dl, 2.lakukan update di function lain
Route::get('/{id}/edit', 'BlogController@edit');
Route::put('/{id}', 'BlogController@update');
//delete
Route::delete('/{id}/delete', 'BlogController@delete');
