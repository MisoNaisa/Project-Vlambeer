<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CustomClasses\GiantBomb\Api as GiantBombApi;
use Illuminate\Support\Facades\App;
use Auth;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index() {

        $productArray = \App\Product::all();

        $games = new GiantBombApi();

        $productimg = \App\Product::where('sale', 1)->get();

//        return view('shop.main', compact('gameInfo', 'productArray'));
        return view('shop.index', compact('productArray', 'productimg'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        if(Auth::check()) {

            if (Auth::user()->role == 'admin') {

                $product = \App\Product::all();
                return view('shop.create', compact('product'));
            }
        }
        else{
            return view('errors.unauthorized');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

//        $product->product_id                = $request->input('product_id');
//        $product->product_name              = $request->input('product_name');
//        $product->product_description       = $request->input('product_description');
//        $product->product_price             = $request->input('product_price');
//        $product->product_sale              = $request->input('product_sale');
//        $product->product_sale_percentage   = $request->input('product_sale_percentage');
//        $product->stock                     = $request->input('stock');
//        $product->product_img               = $request->file('product_img');
//        $product->created_at                = $request->input('created_at');
//
//        $product->save();

        $this->validate($request,[
            'name' => 'required|max:50|string',
            'description' => 'required|string',
            'price' => 'numeric',
            'category' => 'boolean',
            'sale' => 'boolean',
            'sale_percentage' => 'numeric',
            'stock' => 'numeric',
            'img' => 'string'
        ]);

        \App\Product::create($request->except('_token'));

        return redirect('/shop')->with('message', 'Product created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $product = \App\Product::where('id', $id)->first();
        $randproducts = \App\Product::query()
            ->where('id', '!=', $id)
            ->orderByRaw("RAND()")
            ->limit(3)
            ->get();

        $colors = explode(',', $product['color']);
        $sizes = explode(',', $product['size']);

        return view('shop.show', compact('product','randproducts', 'colors', 'sizes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        if(Auth::check()) {

            if (Auth::user()->role == 'admin') {

                $product = \App\Product::where('id', $id)->first();

                return view('shop.edit', compact('product'));
            }
        }
        else{
            return view('errors.unauthorized');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        if($request['sale'] == 1){
            $sale_price = ((100 - $request['sale_percentage']) * $request['price']);
        }


        $this->validate($request,[
            'name' => 'string',
            'description' => 'string',
            'price' => 'numeric',
            'sale' => 'numeric',
            'sale_percentage' => 'numeric',
            'stock' => 'numeric',
            'img' => 'string'
        ]);

        $product = \App\Product::find($request['id']);
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->sale = $request['sale'];
        $product->sale_percentage = $request['sale_percentage'];
        $product->sale_price = $sale_price;
        $product->stock = $request['stock'];
        $product->img = $request['img'];

        $product->save();

        return redirect('/shop/' . $request['id'] . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $product = \App\Product::where('id', $id)->first();

        $product->delete();
    }

    public function paid() {

        //set status on payed
        $token = $_GET['token'];
        $order = \App\Order::where('paypal_token', $token)->first();
        $order->status = 1;
        $order->save();
        $status = 'success';

        //refresh cookie
        setcookie("cart", '[]', time() + (86400 * 5) , '/'); // 86400 = 1 day


        //get user and order info
        $user_id = $order->user_id;
        $user = \App\User::where('id', $user_id)->first();
        $orders = \App\Order::where('user_id', $user_id)->get();


        return view('user.show', compact('status','user', 'orders'));
    }

    public function payment_failed() {


        //get user and order info
        $user_id = $order->user_id;
        $user = \App\User::where('id', $user_id)->first();
        $orders = \App\Order::where('user_id', $user_id)->get();
        return view('user.show', compact('user', 'orders'));
    }

    public function category($cat){


        $productArray = \App\Product::where('category' , $cat)->get();

        $games = new GiantBombApi();

        $gameInfo = $games->getAllGameInfoById(34402);

        $productimg = \App\Product::where('sale', 1)->get();

        return view('shop.index', compact('gameInfo', 'productArray', 'productimg'));
    }
}
