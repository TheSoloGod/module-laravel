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

Route::group(['prefix' => 'student'], function (){
   Route::get('/list', 'StudentController@index')->name('student.list');
   Route::get('/create', 'StudentController@create')->name('student.create');
   Route::post('/store', 'StudentController@store')->name('student.store');
   Route::get('/{id}/edit', 'StudentController@edit')->name('student.edit');
   Route::post('/update', 'StudentController@update')->name('student.update');
   Route::get('/{id}/delete', 'StudentController@delete')->name('student.delete');
   Route::post('/destroy', 'StudentController@destroy')->name('student.destroy');
   Route::get('/{city_id}/filterByCity', 'StudentController@filterByCity')->name('student.filterByCity');
   Route::get('/paginate', 'StudentController@paginate')->name('student.paginate');
});

Route::group(['prefix' => 'city'], function (){
    Route::get('/list', 'CityController@index')->name('city.list');
    Route::get('/create', 'CityController@create')->name('city.create');
    Route::post('/store', 'CityController@store')->name('city.store');
    Route::get('/{id}/edit', 'CityController@edit')->name('city.edit');
    Route::post('/update', 'CityController@update')->name('city.update');
    Route::get('/{id}/delete', 'CityController@delete')->name('city.delete');
    Route::post('/destroy', 'CityController@destroy')->name('city.destroy');
});
