<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;

use App\Models\Product;

use App\Models\ProductImage;

class ProductController extends Controller
{
    public function create(){
    	return view('backend.product.create');
    }

    public function store(ProductRequest $request){
        $model_product=new Product;
        $model_profuct_image=new ProductImage;

        $model->addProduct(array_except($data,['file']));
        if(isset($data['file'])){
            $model_profuct_image->addImage($data['file']);
        }

        return redirect('product.index');

    }


}
