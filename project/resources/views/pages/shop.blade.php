@extends('layout.master')

@section('section')
    <div class="container">
        <div class="shop-header">
            <ul>
                <li>Login</li>
                <li>Register</li>
                <li><i class="fa fa-shopping-cart"></i></li>
            </ul>
        </div>
        <h1>Merchandise</h1>
        <div id="slider">
            {{--<a class="control_next noselect"><i class="fa fa-arrow-right"></i></a>--}}
            {{--<a class="control_prev noselect"><i class="fa fa-arrow-left"></i></a>--}}
            {{--<ul>--}}
                {{--@foreach($gameInfo['images'] as $img)--}}
                    {{--<li><img src="{{ $img['medium_url'] }}" /></li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        </div>
        <div class="products-overview">
            <div class="row col-md-12">
                <div class="product-box col-md-4">
                    <img src="http://lorempixel.com/200/200" alt="product">
                </div>

                <div class="product-box col-md-4">
                    <img src="http://lorempixel.com/200/200" alt="product">
                </div>

                <div class="product-box col-md-4">
                    <img src="http://lorempixel.com/200/200" alt="product">
                </div>
            </div>
        </div>
    </div>
@endsection