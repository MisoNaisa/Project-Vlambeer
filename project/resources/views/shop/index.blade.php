@extends('layout.master_shop')

@section('bodyAttributes')
    class="shop"
@endsection

@section('content')
    <div class="flexslider">
        <ul class="slides">
            @foreach($productimg as $img)
                <li><img src="{{ $img['img'] }}" /></li>
            @endforeach
        </ul>
    </div>


    <div class="row">
        @foreach($productArray as $product)
            <div class="col-sm-4 col-lg-4 col-md-4 product-item">
                <div class="thumbnail">
                    <a href="/shop/product/{{$product['id']}}" ></a>
                    @if($product['sale'] === 1)
                        <div id="sale"></div>
                    @else
                        <div id="sale hide"></div>
                    @endif

                    <img src="{{$product['img']}}" alt="product-img">
                    <div class="caption">

                        <h4>{{$product['name']}}</h4>
                        <p> {{ substr($product['description'], 0, 100) . '...' }}</p>

                        @if($product['sale'] === 1)
                            <h5 class="sale">&#x24;{{$product['price']}}</h5><h3 class="price" style="color: green;">&#x24;{{$product['sale_price']}}</h3>
                        @else
                            <h4 class="price">&#x24;{{$product['price']}}</h4>
                        @endif
                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection