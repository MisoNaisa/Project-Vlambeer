<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartsController extends Controller
{
    public function index() {

//        dd($_COOKIE);
        $cookieCart = json_decode($_COOKIE['cart'], true);

        $cart = [];

        $sum = 0;

        $i = 0;

        foreach($cookieCart as $cartItem){

            $cart[] = \App\Product::where('id', $cartItem[0])->first()->toArray();

            $cart[$i]['quantity'] = $cookieCart[$i][1];
            $cart[$i]['total'] = $cookieCart[$i][1] * $cart[$i]['price'];

            $i++;

        }
        foreach($cart as $num){

            $sum += $num['quantity'] * $num['price'];
        }

        return view('cart.index', compact('cart', 'sum'));
    }

    public function destroy($id){

        $cookieCart = json_decode($_COOKIE['cart'], true);

        foreach($cookieCart as $key => $value) {


            if($value[0] == $id) {
                unset($cookieCart[$key]);
            }

        }


        $cookieCart = array_values($cookieCart);
        $cookieCart = json_encode($cookieCart, false);

        setcookie('cart', $cookieCart);

        return back()->with('message', 'Product removed from cart');
    }
}
