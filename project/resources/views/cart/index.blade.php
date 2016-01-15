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
                    <td></td>
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
                <form name="_xclick" action="{{action('InvoicesController@store')}}" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="upload" value="1">

                    {{--<input type="hidden" name="cmd" value="_xclick">--}}
                    <input type="hidden" name="business" value="sjoerd3008-facilitator@hotmail.com">
                    <input type="hidden" name="currency_code" value="EUR">
                    <input type="hidden" name="return" value="http://vlambeer.dev/shop/paid">
                    <input type="hidden" name="cancel_return" value="http://vlambeer.dev/shop/payment_failed">
                    <?php
                    $i = 1;
                    ?>
                    @foreach($cart as $item)
                        <input type="hidden" name="cart[products][{{$item['id']}}][amount]" value="{{$item['quantity']}}" />
                        <?php $i++; ?>
                    @endforeach
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit">
                    </div>
                    <input type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
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