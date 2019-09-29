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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/greeting/{name?}', function ($name = null) {
    if ($name) {
        echo 'Hello ' . $name . '!';
    } else {
        echo 'Hello World!';
    }
});

Route::post('/discountCalculator', function (Request $request)
{
    $description = $request->description;
    $price = $request->price;
    $percent = $request->percent;
    $discountAmount = $price - ($price * $percent/100);

    return view('result',compact(['description', 'price', 'percent', 'discountAmount']));
})->name('result');

Route::post('/dictionary', function (Request $request)
{
    $word = $request->word;
    $eng = ['hello', 'one', 'fuck', 'name', 'smile'];
    $vie = ['xin chao', 'mot', '***', 'ten', 'cuoi'];
    $result = '';
    for($i = 0; $i<count($eng); $i++){
        if($word == $eng[$i]) {
            $result = $vie[$i];
        }
    }
    return view('dictionary', compact(['word', 'result']));
})->name('dictionary');
