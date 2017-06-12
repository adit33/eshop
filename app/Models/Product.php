<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected function AddProduct($data){
    	Product::create($data);
    }
}
