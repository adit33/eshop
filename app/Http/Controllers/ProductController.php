<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;

use App\Models\Product;

use App\Models\ProductImage;

use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function create(){
    	return view('backend.product.create');
    }

    public function getProducts(){
        $model_product=new Product;
        $products=$model_product->getProducts();
        return $products;
    }

    public function store(ProductRequest $request){
        $model_product=new Product;
        $model_product_image=new ProductImage;
        $model_product_category=new ProductCategory;

        $data=$request->all();
        $product=$model_product->addProduct($data);
        $data['product_id']=$product->id;
        $model_product_category->addCategory($data);
        if(isset($data['file'])){
            $model_product_image->addImage($data);
        }

        return redirect()->route('product.index');
    }


}
