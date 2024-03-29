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

Route::get('/index', 'CarController@index')->name('car.index');
Route::get('/create', 'CarController@create')->name('car.create');
Route::post('/store', 'CarController@store')->name('car.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
