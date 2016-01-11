<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartsController extends Controller
{
    public function index() {

        $cart = json_decode($_COOKIE['cart'], true);

        $items = \App\Product::all();


        return view('cart.index', compact('cart'));
    }
}
