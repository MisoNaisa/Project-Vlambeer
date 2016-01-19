@extends('layout.master')

@section('section')

    <div class="container shopping-cart">

        <div class="title">
            <h1>Shopping cart</h1>
        </div>
        <table class="table">
            <tr>
                <td>Product ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Total</td>
            </tr>
            @foreach($cart as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>
                        @if (!empty($item['color']) || !empty($item['size']))
                            {{$item['color']}} - {{$item['size']}}
                        @endif
                    </td>
                    <td>
                        {{ $item['quantity'] }}
                        <div data-id="{{ $item['id'] }}" class="btn btn-default destroy_this">Delete</div>
                    </td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['total'] }}</td>

                </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>VAT</td>
                <td>{{ round($sum*0.21, 2) }} </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Ex. VAT</td>
                <td>{{ round($sum*0.79, 2) }} </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Total</td>
                <td>{{ $sum }} </td>
            </tr>
        </table>
        @if(Auth::check())
            <div class="paypal pull-right">
                <form action="{{action('InvoicesController@store')}}" method="post">
                    {{csrf_field()}}

                    @foreach($cart as $id => $item)
                        <input type="hidden" name="cart[products][{{$id}}][{{$item['id']}}][amount]" value="{{$item['quantity']}}" />
                        <input type="hidden" name="cart[products][{{$id}}][{{$item['id']}}][size]" value="{{$item['size']}}" />
                        <input type="hidden" name="cart[products][{{$id}}][{{$item['id']}}][color]" value="{{$item['color']}}" />
                        <input type="hidden" name="cart[products][{{$id}}][{{$item['id']}}][id]" value="{{$item['id']}}" />
                    @endforeach
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit">
                    </div>
                </form>
            </div>
        @else
            <div class="register">
                <p>Create an account or log in to place an order</p>
                <a href="/register" class="btn"><button class="btn">Register</button></a>
                <a href="/login" class="btn"><button class="btn">Login</button></a>

            </div>
        @endif
    </div>



@endsection