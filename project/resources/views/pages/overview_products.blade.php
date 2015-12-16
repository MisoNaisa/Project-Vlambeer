@extends('layout.master_shop')

@section('bodyAttributes')
    class="overview_products"
@endsection

@section('content')
    <div class="flexslider">
        {{--<ul class="slides">--}}
            {{--@foreach($gameInfo['images'] as $img)--}}
                {{--<li><img src="{{ $img['medium_url'] }}" /></li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    </div>

    <div class="row">
        @foreach($productArray as $product)

            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <a href="info_product/{{ $product->id }}"></a>
                    <div id="sale"></div>
                    <img src="{{$product->img}}" alt="product-img">
                    <div class="caption">
                        <h4 class="pull-right">&#x24;{{$product->price }}</h4>
                        <h4>{{$product->name}}</h4>

                        {{--                                        <h4>{{ substr($product['name'], 0, 20) . '...' }}</h4>--}}
                        <p> {{ substr($product->description, 0, 100) . '...' }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection