<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table='product';
	protected $primaryKey='id';
	protected $fillable=['nama','harga','deskripsi'];
    
    public function addProduct($data){
    	$product=Product::create($data);
    	return $product;
    }

    public function getProducts(){
    	$products=Product::with('product_category.category','product_image')->get();
    	return $products;
    }

    public function product_category(){
    	return $this->hasMany(ProductCategory::class);
    }

    public function product_image(){
    	return $this->hasMany(ProductImage::class);
    }
}
