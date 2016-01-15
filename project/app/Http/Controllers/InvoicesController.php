<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use Auth;
use App\Order;
use App\Order_Product;
use App\User;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->order_date = date( 'Y-m-d H:i:s' );
        $order->status = 0;
        $order->save();

        $products = $request['cart']['products'];

        foreach($products as $id => $value){

            $product = Product::find($id);

            $order_product = new Order_Product();
            $order_product->order_id = $order->id;
            $order_product->product_id = $product->id;
            $order_product->quantity = $value['amount'];
            $order_product->price = $product->price;
            $order_product->save();

        }

        return "https://www.sandbox.paypal.com/cgi-bin/webscr" ;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->id == $id){

            $user = \App\User::where('id', $id)->first();

            return view('user.invoice', compact('user'));
        }

    else{
            return view('errors.unauthorized');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function invoice($id)
    {
        $order = Order::where('order_id',$id)->first();

        $users = User::find($order->user_id);
        $user = User::find($order->user_id)->ToArray();

        $order_products = App\Order_Product::where('order_id', $id)->get()->ToArray();

        $sum = 0;

        $products = array();

        foreach($order_products as $order_product){

            $product = Product::find($order_product['product_id']);
            $products[$product->id] = array(
                'name' => $product['name'],
                'unitprice' => $product['price'],
                'amount' => $order_product['quantity'],
                'subtotal' => ((($product['price'] * 100)  * $order_product['quantity']) / 100),2,
                'exbtw' => $sum += $order_product['quantity'] * $product['price'],2,
            );

        }

        $products['items'] = $products;
        $order_products['items'] = $order_products;

        $data = view('user.invoice', $user, $products, $order_products);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($data);
        return $pdf->stream(with($users));
    }
}