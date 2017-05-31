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
    return view('frontend.main');
});

Route::get('register',function(){
	return view('frontend.user.register');
});

Route::POST('register/store',['uses'=>'UserController@store','as'=>'user.register']);

Route::group(['prefix'=>'admin'],function(){
	Route::get('user/create',function(){
		return view('backend.user.create');
	});

	Route::resource('category','CategoryController');

	Route::resource('product','ProductController');
});
