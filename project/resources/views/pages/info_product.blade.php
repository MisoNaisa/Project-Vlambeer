@extends('layout.master')

@section('section')

    <div class="container">
        <div class="product">
            <div class="productimg">
                <img src="{{$product->img}}" alt="product-img">
            </div>
            <div class="productinfo">
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>

@endsection