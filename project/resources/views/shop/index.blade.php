@extends('layout.master_shop')

@section('bodyAttributes')
    class="shop"
@endsection

@section('content')
    <div class="flexslider">
        <ul class="slides">
            @foreach($gameInfo['images'] as $img)
                <li><img src="{{ $img['medium_url'] }}" /></li>
            @endforeach
        </ul>
    </div>

    <div class="row">
        @foreach($productArray as $product)
            <div class="col-sm-4 col-lg-4 col-md-4 product-item">
                <div class="thumbnail">
                    <a href="shop/product/{{$product['id']}}" ></a>
                    @if($product['sale'] === 1)
                        <div id="sale"></div>
                    @else
                        <div id="sale hide"></div>
                    @endif

                    <img src="{{$product['img']}}" alt="product-img">
                    <div class="caption">
                        <h4 class="pull-right">&#x24;{{$product['price']}}</h4>
                        <h4>{{$product['name']}}</h4>
                        {{--                                        <h4>{{ substr($product['name'], 0, 20) . '...' }}</h4>--}}
                        <p> {{ substr($product['description'], 0, 100) . '...' }}</p>
                    </div>
                    <div class="buy-now">
                        <input class="quantity" type="number">
                        <div class="btn btn-primary" id="{{$product['id']}}">KOOP DIT!!</div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection