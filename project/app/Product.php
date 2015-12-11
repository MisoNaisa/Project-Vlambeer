<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public $timestamp = false;

    protected $fillable = ['product_name', 'product_description', 'product_price', 'product_sale', 'product_sale_percentage', 'stock', 'product_img'];
}
