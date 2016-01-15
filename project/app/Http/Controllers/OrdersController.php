<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'admin'){

            $orders = \App\Order::query()
                ->join('users', 'order.user_id', '=', 'users.id')
                ->select('users.*', 'order.*')
                ->orderBy('order.order_date','desc')
                ->get();

            return view('order.index', compact('orders'));
        }

    else{
            return view('errors.unauthorized');
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->role == 'admin'){

            $products = \App\Order_Product::query()
                ->join('product', 'order_product.product_id', '=', 'product.id')
                ->select('order_product.*', 'product.*')
                ->where('order_product.order_id', $id)->get();

            $order = \App\Order::where('order_id',$id)->first();

            return view('order.edit', compact('products', 'order'));
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
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'status' => 'required:string'
        ]);
        \App\Order::query()
            ->where('order_id',$request['order_id'])
            ->update(array(
                'status' =>  $request['status']
            ));
        return redirect('admin/orders');

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
}
