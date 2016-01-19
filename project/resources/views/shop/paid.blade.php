@extends('layout.master')
<?php




    $token = $_GET['token'];

    $order = \App\Order::where('paypal_token', $token)->first();
    $id = $order->order_id;
    dd($order = \App\Order::find( $id));
    $order->status = 1;
    $order->save();




?>
@section('section')

    <h1>Payed</h1>
    <p>Paymend went succesfull</p>

@stop