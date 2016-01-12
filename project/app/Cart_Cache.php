<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_Cache extends Model
{
    protected $table = 'cart_cache';

    public $timestamp = true;

    protected $fillable = [
        'products', 'ip_address', 'is_bought',
    ];
}
