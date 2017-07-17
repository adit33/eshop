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

Route::get('/test', function()
{
 

    $data = ['pesan'=>'Hai ini pesan pertama saya'];
 
    Mail::send('backend.emails.user_register', $data, function ($mail)
    {
      $mail->to('eren.jeager33@gmail.com', 'Aditya');
 
      $mail->cc('eren.jeager33@gmail.com', 'Eren Jeager');
 
      $mail->subject('Hello World!');
    });
 
});

Route::get('register',function(){
	return view('frontend.user.register');
});



Route::POST('register/store',['uses'=>'UserController@store','as'=>'user.register']);

Route::group(['prefix'=>'admin'],function(){
	Route::resource('user','UserController');
  Route::get('user/create',function(){
		return view('backend.user.create');
	});

	Route::resource('category','CategoryController');

	Route::resource('product','ProductController');
});
