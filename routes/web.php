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

Route::any('/students', 'StudentController@get_data')->name('get_data');
Route::post('/students/create', 'StudentController@create')->name('create');
Route::delete('/students/delete/{id}', 'StudentController@delete')->name('delete');
Route::post('/students/edit/{id}', 'StudentController@edit')->name('edit');
Route::post('/students/search/', 'StudentController@search')->name('search');