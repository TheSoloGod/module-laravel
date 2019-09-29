<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'category'], function (){
    Route::get('/', 'CategoryController@index')->name('category.index');
    Route::get('/{category_id}', 'CategoryController@show')->name('category.show');
    Route::post('/', 'CategoryController@store')->name('category.store');
    Route::put('/{category_id}', 'CategoryController@update')->name('category.update');
    Route::delete('/{category_id}', 'CategoryController@delete')->name('category.delete');
});
