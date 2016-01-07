@extends('layout.master_admin')

@section('section')
    <div class="container">
        <form action="{{action('OrdersController@update')}}" method="POST">
            <input name="_method" type="hidden" value="PUT">
            <input name="order_id" type="hidden" value="{{$order['order_id']}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="game_name">Status</label>
                <select name="status" class="form-control">
                    <option value="0" @if($order['status'] == '0') selected="selected" @endif>Besteld</option>
                    <option value="1" @if($order['status'] == '1') selected="selected" @endif>Betaald</option>
                    <option value="2" @if($order['status'] == '2') selected="selected" @endif>Vertraagd</option>
                    <option value="3" @if($order['status'] == '3') selected="selected" @endif>Verzonden</option>
                    <option value="4" @if($order['status'] == '4') selected="selected" @endif>Geleverd</option>
                </select>
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit">
            </div>
        </form>
        <table>
            <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Sale</td>
                <td>Sale Percentage</td>
                <td>Stock</td>
                <td>Quantuty</td>
            </tr>
        </table>
        @foreach($products as $product)

                <table>
                    <tr>
                        <td>{{$product['name']}}</td>
                        <td>{{$product['price']}}</td>
                        <td>@if($product['sale'] == 0){{$product['sale'] = 'No'}}@else{{$product['sale'] = 'Yes'}}@endif</td>
                        <td>{{$product['sale_percentage']}}</td>
                        <td>{{$product['stock']}}</td>
                        <td>{{$product['quantity']}}</td>
                    </tr>
                </table>
        @endforeach
    </div>
@endsection