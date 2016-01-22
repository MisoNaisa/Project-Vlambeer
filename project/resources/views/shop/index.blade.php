@extends('layout.master_shop')

@section('bodyAttributes')
    class="shop"
@endsection

@section('content')
    <div class="flexslider">
        <div id="saleslider"></div>
        <ul class="slides">
{{--            {{dd($product_sale_img)}}--}}
            @foreach($product_sale_img as $img)
                <li><img src="{{ $img['img'] }}" /></li>

                @if(empty($img))

                    @foreach($productimg as $img)
                        <li><img src="{{ $img['img'] }}" /></li>
                    @endforeach

                @endif

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
                    <h4 style="color: black; height: 34px;">{{$product['name']}}</h4>
                    <p style="color: black; height: 88px;"> {{ substr($product['description'], 0, 100) . '...' }}</p>

                    <div class="caption">
                        @if($product['sale'] === 1)
                            <h4 class="price">&#x24;{{$product['sale_price']}}</h4>
                        @else
                            <h4 class="price">&#x24;{{$product['price']}}</h4>
                        @endif

                            {{--@if(!($product->category == 'clothes'))--}}
                        {{--<div class="buy-now">--}}
                            {{--<i class="minus fa fa-minus "></i>--}}
                            {{--<input min="1" type="number" class="quantity" value="1" />--}}
                            {{--<i class="add fa fa-plus"></i>--}}
                            {{--<div class="btn btn-primary pull-right add_to_cookie" id="{{$product['id']}}">Add to cart</div>--}}
                        {{--</div>--}}
                                {{--@endif--}}


                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection