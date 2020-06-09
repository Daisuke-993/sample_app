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
    return view('welcome');
});

Route::get('/sample/', 'WordController@index')->name('index');
Route::get('/sample/form', 'WordController@create')->name('form');
Route::post('/sample/store', 'WordController@store')->name('store');
Route::delete('/sample/delete/{id}', 'WordController@destroy')->name('delete');
