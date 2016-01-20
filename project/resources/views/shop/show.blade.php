@extends('layout.master_shop')

@section('bodyAttributes')
    class="shop"
@endsection

@section('content')
    <div class="product">
        <div class="row">
            <div class="col-md-4 col-md-offset-1 productimg">
                <img src="{{$product->img}}" alt="product-img">
            </div>
            <div class="col-md-6">
                <div class="productinfo">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                </div>

                <div class="buy-now">
                    @if($product->category == 'clothes')
                        <div class="productoption ">
                            <div class="form-group">
                                <select class="form-control size" name="size">
                                    @foreach($sizes as $size)

                                        <option value="{{$size}}">{{$size}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control color" name="color">
                                    @foreach($colors as $color)

                                        <option value="{{$color}}">{{$color}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endif
                    <i class="minus fa fa-minus "></i>
                    <input min="1" type="number" class="quantity" value="1" />
                    <i class="add fa fa-plus"></i>
                    <div class="btn btn-primary pull-right add_to_cookie" id="{{$product['id']}}">Add to cart</div>
                </div>

            </div>
        </div>
    </div>
    <div class="relevant">
        <h2>Items you also may like:</h2>
        @foreach($randproducts as $randproduct)
            <div class="col-sm-4 col-lg-4 col-md-4 product-item">
                <div class="thumbnail">
                    <a href="{{$randproduct->id}}"></a>
                    <img src="{{$randproduct->img}}" alt="product-img">
                    <div class="caption">
                        <h4 class="pull-right">&#x24;{{$product['price']}}</h4>
                        <h4>{{$randproduct['name']}}</h4>
                        {{--                                        <h4>{{ substr($product['name'], 0, 20) . '...' }}</h4>--}}
                        <p> {{ substr($randproduct['description'], 0, 100) . '...' }}</p>
                    </div>
                    <div class="buy-now">
                        <input class="quantity" type="number">
                        <div class="btn btn-primary" id="{{$randproduct->id}}">KOOP NU!!</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection