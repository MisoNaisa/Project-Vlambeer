@extends('layout.master_admin')

@section('section')
    <div class="container">
        <table class="table">
            <tr>
                <td>First Name</td>
                <td>Insertion</td>
                <td>Last Name</td>
                <td>Address</td>
                <td>Housenumber</td>
                <td>Zipcode</td>
                <td>City</td>
                <td>Country</td>
                <td>Phonenumber</td>
                <td>Order Date</td>
                <td>Status</td>
            </tr>

    @foreach($orders as $order)
            <tr>
                <td>{{$order['first_name']}}</td>
                <td>{{$order['insertion']}}</td>
                <td>{{$order['last_name']}}</td>
                <td>{{$order['address']}}</td>
                <td>{{$order['housenumber']}}</td>
                <td>{{$order['zipcode']}}</td>
                <td>{{$order['city']}}</td>
                <td>{{$order['country']}}</td>
                <td>{{$order['phonenumber']}}</td>
                <td>{{date("d-m-Y",strtotime($order['order_date']))}}</td>
                <td>@if($order['status'] == 0)Besteld @elseif($order['status'] == 1)Betaald @elseif($order['status'] == 2)Vertraagd @elseif($order['status'] == 3)Verzonden @elseif($order['status'] == 4)Geleverd @endif</td>
                <td><a href="{{ action('OrdersController@edit', ['id' => $order->order_id]) }}">Bekijken</a></td>
            </tr>

        @endforeach
        </table>
    </div>
@endsection