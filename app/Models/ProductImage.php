<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
	protected $table='product_image';
	protected $primaryKey='id';
	protected $fillable=['product_id','name'];
	public $timestamps=false;
	protected $path='images'.DIRECTORY_SEPARATOR.'product';
    
    public function addImage($data){
    	if(isset($data['file'])){
    		foreach ($data['file'] as $image) {
    			$image_original_name=$image->getClientOriginalName();
	            $image_name=str_random(10).'-'.$image_original_name;
	            $image->move($this->path,$image_name);
	            $dataImage['product_id']=$data['product_id'];
	            $dataImage['image_name']=$image_original_name;
	            $this->addImageName($dataImage);
    		}
    	}
    }

    public function addImageName($data){
    	$productImage=new ProductImage;
    	$productImage->name=$data['image_name'];
    	$productImage->product_id=$data['product_id'];
    	$productImage->save();
    }
}
