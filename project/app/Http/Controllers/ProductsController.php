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

        return view('shop.main', compact('gameInfo', 'productArray'));
//        return view('shop.index', compact('productArray', 'productimg'));


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
        $sale_price=null;
        if($request['sale'] == 1){
            $sale_price = ((100 - $request['sale_percentage']) / 100 * $request['price']);
        }

        $this->validate($request,[
            'name' => 'required|max:50|string',
            'description' => 'required|string',
            'price' => 'numeric',
            'category' => 'string',
            'color'    => 'string',
            'size'     => 'string',
            'sale' => 'boolean',
            'sale_percentage' => 'numeric',
            'sale_price' => 'numeric',
            'stock' => 'numeric',
            'img' => 'string'
        ]);

        $product = new Product;
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->category = $request['category'];
        $product->color = $request['color'];
        $product->size = $request['size'];
        $product->sale = $request['sale'];
        $product->sale_percentage = $request['sale_percentage'];
        $product->sale_price = $sale_price;
        $product->stock = $request['stock'];
        $product->img = $request['img'];

        $product->save();

        return redirect('/admin/shop')->with('message', 'Product created succesfully');
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
            $sale_price = ((100 - $request['sale_percentage']) / 100 * $request['price']);
        }


        $this->validate($request,[
            'name' => 'required|max:50|string',
            'description' => 'required|string',
            'price' => 'numeric',
            'category' => 'boolean',
            'color'    => 'string',
            'size'     => 'string',
            'sale' => 'boolean',
            'sale_percentage' => 'numeric',
            'stock' => 'numeric',
            'img' => 'string'
        ]);

        $product = \App\Product::find($request['id']);
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->category = $request['category'];
        $product->color = $request['color'];
        $product->size = $request['size'];
        $product->sale = $request['sale'];
        $product->sale_percentage = $request['sale_percentage'];
        $product->sale_price = $sale_price;
        $product->stock = $request['stock'];
        $product->img = $request['img'];

        $product->save();

        return redirect('admin/shop/');
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
