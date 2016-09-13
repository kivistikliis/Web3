<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/hello', function () {
    return 'hello world';
});*/

Route::get('helloctrl', 'Helloctrl@index');
Route::get('slothsctrl', 'slothsctrl@getSlothsreview');



Route::get('/hello', function () {
    return view('hello', ['name' => 'you']);
});

Route::get('/',function() {
    return view('welcome');
});
Route::get('/sloth', function () {
    return view('sloth');
});

//Route::get('/sloth', function () {
//    return view('sloth');
//});
