<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
    	return view('backend.product.create');
    }

    public function store(Request $request){
    	$rules=[
    				'nama'=>'required',
    				'category_id'=>'required',
    				'harga'=>'required',
    				'deskripsi'=>'required'
    			];

    	$this->validate($request,$rules);

        return dd($request->all());

    }
}
