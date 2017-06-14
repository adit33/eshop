<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table='product';
	protected $primaryKey='id';
	protected $fillable=['nama','harga','deskripsi'];
    protected function AddProduct($data){
    	Product::create($data);
    }

    public function category(){
    	return $this->belongsToMany(Category::class);
    }
}
