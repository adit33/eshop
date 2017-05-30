<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";
    protected $fillable=['id','nama'];
    public $timestamps=false;
    protected $primaryKey='id';
}
