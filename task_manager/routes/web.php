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

Route::prefix('customer')->group(function () {
    Route::get('index', 'TaskManagerController@index');

    Route::get('create', 'TaskManagerController@create')->name('create');

    Route::post('store', 'TaskManagerController@store');

    Route::get('{id}/show', 'TaskManagerController@show');

    Route::get('{id}/edit', 'TaskManagerController@edit');

    Route::get('update&id={id}', 'TaskManagerController@update')->name('update');

    Route::get('delete&id={id}', 'TaskManagerController@destroy')->name('destroy');
});
