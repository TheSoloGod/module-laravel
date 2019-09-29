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

Route::group(['prefix' => 'products'], function (){
    Route::get('/', 'ProductController@index')->name('product.list');
    Route::get('/{id}/show', 'ProductController@show')->name('product.show');
});

Route::group(['prefix' => 'cart'], function (){
    Route::get('/', 'CartController@index')->name('cart.list');
    Route::get('/add/{id?}', 'CartController@add')->name('cart.add');
    Route::get('/remove/{id?}', 'CartController@remove')->name('cart.remove');
    Route::post('/update/{id?}', 'CartController@update')->name('cart.update');
    Route::get('/update/ajax', 'CartController@ajax')->name('cart.ajax');
});
