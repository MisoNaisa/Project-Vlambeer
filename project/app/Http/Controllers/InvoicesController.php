<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

use App;
use Auth;
use App\Order;
use App\Order_Product;
use App\User;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CustomClasses\Paypal\paypal as Paypal;

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
        $cookieCart = json_decode($_COOKIE['cart'], true);

        if(empty($cookieCart)){
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

            $error = true;
            return view('cart.index', compact('cart', 'sum', 'error'));

        }

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

        //Paypal check out
        //Our request parameters
        $requestParams = array(
            'RETURNURL' => 'http://vlambeer.dev/shop/paid',
            'CANCELURL' => 'http://vlambeer.dev/shop/payment_failed'
        );

        $items = array();
        $i=0;

        foreach($cart as $id => $value) {

            $product = Product::find($value['id']);

            if (!(Empty($product['color'])) || !(Empty($product['size']))) {
                $product_name = $product['name'] . ' ' . $product['color'] . ' / ' . $product['size'];
            } else {
                $product_name = $product['name'];
            }


            if($product['sale'] == 1){
                $temp = array(
                    'L_PAYMENTREQUEST_0_NAME' . $i => $product_name,
                    'L_PAYMENTREQUEST_0_AMT' . $i => $product['sale_price'],
                    'L_PAYMENTREQUEST_0_QTY' . $i => $value['quantity']
                );
            }else{
                $temp = array(
                    'L_PAYMENTREQUEST_0_NAME' . $i => $product_name,
                    'L_PAYMENTREQUEST_0_AMT' . $i => $product['price'],
                    'L_PAYMENTREQUEST_0_QTY' . $i => $value['quantity']
                );
            }

            $items = array_merge($items, $temp);

            $i = $i + 1;

            if($product['sale'] == 1){
                $total[] =  $product['sale_price'] * $value['quantity'];

            }else{
                $total[] =  $product['price'] * $value['quantity'];
            }


        }

//        $orderParams = array(
//            'PAYMENTREQUEST_0_AMT' => array_sum($total),
//            'PAYMENTREQUEST_0_CURRENCYCODE' => 'EUR',
//            'PAYMENTREQUEST_0_ITEMAMT' => array_sum($total)
//        );
//
//        $paypal = new Paypal();
//        $response = $paypal -> request('SetExpressCheckout',$requestParams + $orderParams + $items);
//
//        $order = new Order;
//        $order->user_id = Auth::user()->id;
//        $order->order_date = date( 'Y-m-d H:i:s' );
//        $order->status = 0;
//        $order->paypal_token = $response['TOKEN'];
//
//        $order->save();
//
//
//
//        foreach($cart as $id => $value){
//
//                $product = Product::find($value['id']);
//
//                $order_product = new Order_Product();
//                $order_product->order_id = $order->id;
//                $order_product->product_id = $value['id'];
//                $order_product->quantity = $value['quantity'];
//
//                if (!(Empty($value['color']))) {
//                    $order_product->color = $value['color'];
//                }
//                if (!(Empty($value['size']))) {
//                    $order_product->size = $value['size'];
//                }
//
//                if($product['sale'] == 1){
//                    $order_product->price = $product->sale_price;
//                }else{
//                    $order_product->price = $product->price;
//                }
//                $order_product->save();
//            }
//
//
//        if(is_array($response) && $response['ACK'] == 'Success') { //Request successful
//
//            $token = $response['TOKEN'];
//
//            return redirect('https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&token=' . urlencode($token));
//
//        }


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
        $order = Order::where('id',$id)->first();

        $users = User::find($order->user_id);
        $user = User::find($order->user_id)->ToArray();

        $order_products = Order_Product::where('order_id', $id)->get()->ToArray();

        $sum = 0;

        $products = array();

        foreach($order_products as $order_product){

            $product = Product::find($order_product['product_id']);

            $products[$order_product['order_product_id']] = array(
                'name' => $product['name'],
                'unitprice' => $order_product['price'],
                'amount' => $order_product['quantity'],
                'subtotal' => ((($order_product['price'] * 100)  * $order_product['quantity']) / 100),2,
                'exbtw' => $sum += $order_product['quantity'] * $product['price'],2,
                'product_id' => $order_product['product_id'],
                'size' => $order_product['size'],
                'color' => $order_product['color'],
            );

        }
        //dd($order_products);
        //dd($products);

        $products['items'] = $products;
        $order_products['keys'] = $order_products;
        //dd($order_products);

        $data = view('user.invoice', $user, $products, $order_products);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($data);
        return $pdf->stream(with($users));
    }
}