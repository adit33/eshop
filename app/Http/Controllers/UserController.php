<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;

use App\Models\User;

use App\Mail\UserRegistration;

use Mail;

use App\DataTables\UserDataTable;

class UserController extends Controller
{
    public function index(UserDataTable $dataTable){
    	return $dataTable->render('backend.user.index');
    }

    public function register(){
    	return view('backend.user.create');
    }

    public function store(UserRequest $request){
    	$data=$request->all();
    	$data['password']=bcrypt($request->input('password'));
    	$data['activation_token']=str_random(64);
    	$user=User::create($data);
    }
}
