@extends('layout.master')

@section('section')

    <div class="container">

        <div class="title">
            <h1>Shopping cart</h1>
        </div>
        <table class="table">
            <tr>
                <td>Product ID</td>
                <td>Name</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Total</td>
            </tr>

            @foreach($cart as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>
                        {{ $item['quantity'] }}
                        <form action="/cart/{{ $item['id'] }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            {{--<input class="btn btn-danger fa fa-times" type="submit" value="X">--}}
                            <button class="btn-danger fa fa-times"></button>
                        </form>
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
                <form name="_xclick" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
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
                        <input type="hidden" name="item_name_{{ $i }}" value="{{$item['name']}}" />
                        <input type="hidden" name="amount_{{ $i }}" value="{{$item['price']}}" />
                        <input type="hidden" name="quantity_{{ $i }}" value="{{$item['quantity']}}" />
                        <?php $i++; ?>
                    @endforeach
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