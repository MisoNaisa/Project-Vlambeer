<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CustomClasses\GiantBomb\Api as GiantBombApi;
use Illuminate\Support\Facades\App;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {


        $user =  \App\User::where('id', $id)->first();
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $product = \App\Product::all();

        return view('shop.create', compact('product'));
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

        $user =  \App\User::where('id', $id)->first();
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $product = \App\Product::where('id', $id)->first();

        return view('shop.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

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

        return view('shop.paid');
    }

    public function payment_failed() {

        return view('shop.payment_failed');
    }

    public function pdf() {
        require_once('../../../../dompdf/dompdf_config.inc.php');
//        spl_autoload_register('DOMPDF_autoload');
//        function pdf_create($html, $filename, $paper, $orientation, $stream=TRUE)
//        {
//            $dompdf = new DOMPDF();
//            $dompdf->set_paper($paper,$orientation);
//            $dompdf->load_html($html);
//            $dompdf->render();
//            $dompdf->stream($filename.".pdf");
//        }
//        $filename = 'nama_file';
//        $dompdf = new DOMPDF();
//        $html = file_get_contents('file_html.php');
//        pdf_create($html,$filename,'A4','portrait');

        return view('user.show', compact('user'));
    }
}
