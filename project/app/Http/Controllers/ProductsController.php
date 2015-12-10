<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CustomClasses\GiantBomb\Api as GiantBombApi;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();

        $games = new GiantBombApi();
        $gameInfo = $games->getAllGameInfoById(34402);

        return view('pages.shop', compact( 'tweetV', 'tweetR', 'tweetJ', 'gameInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

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
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();
        $product = \App\Product::where('product_id', $id)->first();

        return view('shop.edit', compact('product','tweetV', 'tweetR', 'tweetJ'));
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
            'product_name' => 'string',
            'product_description' => 'string',
            'product_price' => 'numeric',
            'product_sale' => 'numeric',
            'product_sale_percentage' => 'numeric',
            'product_stock' => 'numeric',
            'product_img' => 'string'
        ]);

        $product = \App\Product::find($request['product_id']);
        $product->name = $request['product_name'];
        $product->description = $request['product_description'];
        $product->price = $request['product_price'];
        $product->sale = $request['product_sale'];
        $product->sale_percentage = $request['product_sale_percentage'];
        $product->stock = $request['product_stock'];
        $product->img = $request['product_img'];
        $product->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::where('product_id', $id)->first();
        $product->delete();
    }
}
