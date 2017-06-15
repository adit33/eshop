<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table='product_category';
    protected $fillable=['category_id','product_id'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function addCategory($categories){
    	if(isset($categories)){
    		foreach ($categories['category_id'] as $category) {
    			$productCategory=new ProductCategory;
    			$productCategory->product_id=$categories['product_id'];
    			$productCategory->category_id=$category;
    			$productCategory->save();
    		}
    	}
    }

    public function category(){
    	return $this->belongsTo(Category::class);
    }
}
