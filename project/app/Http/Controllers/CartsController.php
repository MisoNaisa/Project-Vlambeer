<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class CartsController extends Controller
{
    public function index() {


        $cookieCart = json_decode($_COOKIE['cart'], true);

        $cart = [];

        $sum = 0;

        $i = 0;

        foreach($cookieCart as $cartItem){

            $cart[] = \App\Product::where('id', $cartItem[0])->first()->toArray();

            $cart[$i]['quantity'] = $cartItem[1];
            if($cart[$i]['sale'] == 1){
                $cart[$i]['total'] = $cartItem[1] * $cart[$i]['sale_price'];
            }else{
                $cart[$i]['total'] = $cartItem[1] * $cart[$i]['price'];
            }
            $cart[$i]['color'] = $cartItem[2];
            $cart[$i]['size'] = $cartItem[3];
            $i++;

        }
        foreach($cart as $num){
            if($num['sale'] == 1){
                $sum += $num['quantity'] * $num['sale_price'];
            }else{
                $sum += $num['quantity'] * $num['price'];
            }
        }

        return view('cart.index', compact('cart', 'sum'));
    }

}

