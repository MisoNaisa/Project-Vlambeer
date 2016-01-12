<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

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

//        if(Auth::check()){
//           echo "someone is logged in";
//        }
//        else {
//            echo "someone is not logged in";
//        }
//dd();
        return view('cart.index', compact('cart', 'sum'));
    }

    public function destroy($id){

        $cookieCart = json_decode($_COOKIE['cart']);
        unset ($_COOKIE['cart']);
        foreach($cookieCart as $key => $value) {

            if($value[0] == $id) {
                unset($cookieCart[$key]);
            }

        }


        $cookieCart = array_values($cookieCart);
        $cookieCart = json_encode($cookieCart, false);

//        dd($cookieCart);
        setcookie('cart', $cookieCart);

        return back()->with('message', 'Product removed from cart');
    }
}

