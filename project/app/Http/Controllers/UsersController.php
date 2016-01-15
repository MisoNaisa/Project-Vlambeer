<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CustomClasses\GiantBomb\Api as GiantBombApi;
use Illuminate\Support\Facades\App;
use Auth;

class UsersController extends Controller
{


    public function index($id)
    {



    }



    public function create()
    {


    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        if(Auth::check()) {

            if (Auth::user()->id == $id) {

                $user = \App\User::where('id', $id)->first();
                $orders = \App\Order::where('user_id', $id)->get();

                foreach ($orders as $order) {


                    $order_id = $order->order_id;


                }
//            $order_pr = \App\Order_Product::where('order_id', $order_id)->get();
//
//
//            $arr = [];
//
//            foreach ($order_pr as $product_id) {
//
//                array_push($arr, $product_id->product_id);
//            }
//
//            $names = [];
//            foreach ($arr as $product_id) {
//
//                $product = \App\Product::where('id', $product_id)->get()->toArray();
//
//                // Check to see its not empty,
//                // to prevent errors when no product could be found.
//                if (!empty($product)) {
//
//                    // Shift off the first found product
//                    // and store it in $product.
//                    $product = array_shift($product);
//
//                    // Since the $product is converted to an array,
//                    // get the name key to store this products name.
//                    $names[] = $product;
////                $names[] =  $product['name'];
//                }
//            }
//
//
//        }


//        dd( $names[0]->all()[0]->getAttribute( 'name' ) );
//        dd( new \ReflectionObject( $names[0]->all()[0] ) );
//
//        dd($names[0]->toArray()[0]->attributes[0]->name);


                return view('user.index', compact('user', 'orders'));
            }
        }

    else{
            return view('errors.unauthorized');
        }

    }


    public function edit($id)
    {
        if(Auth::check()) {

            if (Auth::user()->id == $id) {

                $user = \App\User::where('id', $id)->first();

                return view('user.edit', compact('user'));
            }
        }
        else{
            return view('errors.unauthorized');
        }

    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'first_name' => 'required|string',
            'insertion' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|E-mail',
            'phonenumber' => 'required|numeric',
            'address' => 'required|string',
            'housenumber' => 'required|string',
            'zipcode' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'date_of_birth' => 'required|date',
            'newsletter' => 'required|Boolean',
        ]);

        $user = \App\User::find($request['user_id']);

        $user->first_name = $request['first_name'];
        $user->insertion = $request['insertion'];
        $user->last_name = $request['last_name'];
        $user->email = $request['email'];
        $user->phonenumber = $request['phonenumber'];
        $user->address = $request['address'];
        $user->housenumber = $request['housenumber'];
        $user->zipcode = $request['zipcode'];
        $user->city = $request['city'];
        $user->country = $request['country'];
        $user->date_of_birth = $request['date_of_birth'];
        $user->newsletter = $request['newsletter'];

        $user->save();

        return redirect('/user/' . $request['user_id']);

    }


}