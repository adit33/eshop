<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;

use App\Models\Product;

class ProductController extends Controller
{
    public function create(){
    	return view('backend.product.create');
    }

    public function store(ProductRequest $request){
        $model=new Product;

        // $data=$request->all();


        // if($model->addProduct($data))
        //     return redirect()->back();

        return dd($request->all());

    }


}
