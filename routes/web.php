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
	// dd("da vao den router");
    return view('welcome');
});

Route::get('hello','HelloController@hello');


// Route::view('hello','hello');

Route::get('users/{id}/{name}', function ($index, $name) {
    return "tham so truyen vao la " . $index . " --- " . $name;
});