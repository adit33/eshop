<?php

namespace App;

use App\Models\ProductImage;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public function addImage($images){
    	if(isset($images){
    		foreach ($images as $image) {
    			ProductImage::create($image);
    		}
    	})
    }
}
