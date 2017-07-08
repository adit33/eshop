<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;

use App\Models\User;

class UserController extends Controller
{
    public function register(){
    	return view('backend.user.create');
    }

    public function store(UserRequest $request){
    	$data=$request->all();
    	$data['password']=bcrypt($request->input('password'));
    	$user=User::create($data);
    }
}
