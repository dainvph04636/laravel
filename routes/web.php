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

Route::get('input','InputController@input')->name('input-view');
Route::post('sum', 'InputController@sum')->name('sum');

// Tao route Student
 Route::get('students', 'StudentController@index')->name('students');

// Tao route Class
Route::get('classes', 'ClassRoomController@index')->name('classes');
Route::get('admins', 'AdminController@index')->name('admins');
Route::get('users', 'UserController@index')->name('users');

//
Route::get('/admin_temp',function (){
	return view ('admin.master');
});
Route::get('/admin_temp/class',function (){
	return view ('admin.class');
});

