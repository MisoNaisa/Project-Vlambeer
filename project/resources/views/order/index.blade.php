@extends('layout.master_admin')

@section('section')
    <div class="container">
    @foreach($orders as $order)
        <table>
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
                <td>{{$order['order_date']}}</td>
                <td>{{$order['status']}}</td>
                <td><a href="{{ action('OrdersController@edit', ['id' => $order->order_id]) }}">Bekijken</a></td>
            </tr>
        </table>
        @endforeach
    </div>
@endsection