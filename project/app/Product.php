<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public $timestamps = false;

    protected $fillable = ['name', 'description', 'price', 'sale', 'sale_percentage', 'stock', 'img'];
}
