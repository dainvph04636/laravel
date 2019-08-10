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

// Route::get('hello','HelloController@hello');


// Route::view('hello','hello');

// Route::get('users/{id}/{name}', function ($index, $name) {
//     return "tham so truyen vao la " . $index . " --- " . $name;
// });

// Route::get('input','InputController@input')->name('input-view');
// Route::post('sum', 'InputController@sum')->name('sum');

// Tao route Student
Route::get('students', 'StudentController@index')->name('students');

// Class route
Route::group(
    [
        'prefix' => 'classes',
        'as' => 'classes.',
        'middleware' => 'auth',
        // 'middleware' => ['auth', 'active.admin'],

    ],
    function () {
        Route::get('/', 'ClassRoomController@index')->name('list');
        Route::get('add', 'ClassRoomController@createForm')->name('add');
        Route::post('create-post', 'ClassRoomController@create')->name('create-post');
        Route::get('{class}/edit', 'ClassRoomController@editForm')->name('edit');
        Route::post('update-post', 'ClassRoomController@update')->name('update');
        Route::get('{class}/delete', 'ClassRoomController@delete')->name('delete');
    }
);

Route::group(
    ['prefix' => 'admins', 'as' => 'admins.'],
    function () {
        Route::get('/', 'AdminController@index')->name('list');
        Route::get('class', 'AdminController@indexClass')->name('class');
        Route::get('login', 'AdminController@getLogin')->name('getLogin');
        Route::post('post-login', 'AdminController@postLogin')->name('postLogin');
        Route::get('logout', 'AdminController@logout')->name('logout');
        Route::get('register', 'AdminController@getRegister')->name('getRegister');

    }
);

//-- CHUYEN LEN GROUP CLASS --
	// Route::get('classes', 'ClassRoomController@index')->name('classes');
	// Route::get('classes/add', 'ClassRoomController@createForm')->name('classes.add-form');
	// Route::post('classes/create-post', 'ClassRoomController@create')->name('classes.create-post');
//-- CHUYEN LEN GROUP CLASS --

// Route::get('admins', 'AdminController@index')->name('admins');
// Route::get('users', 'UserController@index')->name('users');

//
Route::get('/admin_temp',function (){
	return view ('admin.master');
});

