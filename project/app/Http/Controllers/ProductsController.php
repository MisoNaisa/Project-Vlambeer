<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CustomClasses\GiantBomb\Api as GiantBombApi;
use Illuminate\Support\Facades\App;
use App\Http\Requests\ProductCreateRequest;

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
        $productArray = \App\Product::all();

        $games = new GiantBombApi();
        $gameInfo = $games->getAllGameInfoById(34402);

        return view('shop.main', compact( 'tweetV', 'tweetR', 'tweetJ', 'gameInfo', 'productArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();

        $product = \App\Product::all();
        return view('shop.create', compact('product','tweetV', 'tweetR', 'tweetJ'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            'sale' => 'boolean',
            'sale_percentage' => 'numeric',
            'stock' => 'numeric',
            'img' => 'string'
        ]);

        \App\Product::create($request->except('_token'));

        return redirect('/admin/shop')->with('message', 'Product created succesfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();
        return view('shop.info_products', compact('tweetV', 'tweetR', 'tweetJ'));
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
        $product = \App\Product::where('id', $id)->first();

        return view('shop.edit', compact('product','tweetV', 'tweetR', 'tweetJ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCreateRequest $request, $id)
    {
//        dd($request['name']);
//        $this->validate($request,[
//            'name' => 'string',
//            'description' => 'string',
//            'price' => 'numeric',
//            'sale' => 'numeric',
//            'sale_percentage' => 'numeric',
//            'stock' => 'numeric',
//            'img' => 'string'
//        ]);

        $product = \App\Product::find($request['id']);

        if($product->stock < 0) {
            return redirect('/overview_products')->with('message'. 'Voorraad kan niet lager worden ingevoerd dan 0');
        }

        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->sale = $request['sale'];
        $product->sale_percentage = $request['sale_percentage'];
        $product->stock = $request['stock'];
        $product->img = $request['img'];
        $product->save();
//        return redirect('/admin/shop' . $request['id'] . '/edit');
        return redirect('/overview_products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $product = \App\Product::where('id', $id)->first();
        $product->delete();
    }
}
