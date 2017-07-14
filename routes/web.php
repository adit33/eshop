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
 
    // Variable data ini yang berupa array ini akan bisa diakses di dalam "view".
    $data = ['prize' => 'Peke', 'total' => 3 ];
 
    // "emails.hello" adalah nama view.
    Mail::send('backend.emails.user_register', $data, function ($mail)
    {
      // Email dikirimkan ke address "momo@deviluke.com" 
      // dengan nama penerima "Momo Velia Deviluke"
      $mail->to('aditpastrana@gmail.com', 'Aditya');
 
      // Copy carbon dikirimkan ke address "haruna@sairenji" 
      // dengan nama penerima "Haruna Sairenji"
      $mail->cc('eren.jeager33@gmail.com', 'Haruna Sairenji');
 
      $mail->subject('Hello World!');
    });
 
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
