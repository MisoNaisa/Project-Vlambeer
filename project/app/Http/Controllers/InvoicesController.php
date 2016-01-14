<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
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
        $user = \App\Order::query()
            ->join('users', 'order.user_id', '=', 'users.id')
            ->where('order.order_id', $id)->first();

        $users = \App\Order::query()
            ->join('users', 'order.user_id', '=', 'users.id')
            ->where('order.order_id', $id)->first()->ToArray();

        $data = view('user.invoice', $users);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($data);
        return $pdf->stream(with($user));
    }
}