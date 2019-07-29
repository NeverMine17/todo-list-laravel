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

Route::get('/table', 'TodoListController@get_data');
Route::post('/table/create', 'TodoListController@create')->name('create');
Route::delete('/table/delete/{id}', 'TodoListController@delete')->name('delete');
