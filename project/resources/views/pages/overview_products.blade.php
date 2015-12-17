{{--@extends('layout.master_shop')--}}

{{--@section('bodyAttributes')--}}
    {{--class="overview_products"--}}
{{--@endsection--}}

{{--@section('content')--}}
    {{--<div class="flexslider">--}}
        {{--<ul class="slides">--}}
            {{--@foreach($gameInfo['images'] as $img)--}}
                {{--<li><img src="{{ $img['medium_url'] }}" /></li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
        {{--@foreach($productArray as $product)--}}

            {{--<div class="col-sm-4 col-lg-4 col-md-4">--}}
                {{--<div class="thumbnail">--}}
                    {{--<a href="info_product/{{ $product->id }}"></a>--}}
                    {{--<div id="sale"></div>--}}
                    {{--<img src="{{$product->img}}" alt="product-img">--}}
                    {{--<div class="caption">--}}
                        {{--<h4 class="pull-right">&#x24;{{$product->price }}</h4>--}}
                        {{--<h4>{{$product->name}}</h4>--}}

                        {{--                                        <h4>{{ substr($product['name'], 0, 20) . '...' }}</h4>--}}
                        {{--<p> {{ substr($product->description, 0, 100) . '...' }}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}
{{--@endsection--}}




@extends('layout.master_shop')

@section('bodyAttributes')
    class="shop"
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
                    <a href="#"></a>
                    <div id="sale"></div>
                    <img src="{{$product['img']}}" alt="product-img">
                    <div class="caption">
                        <h4 class="pull-right">&#x24;{{$product['price']}}</h4>
                        <h4>{{$product['name']}}</h4>
                        <p> {{ substr($product['description'], 0, 100) . '...' }}</p>

                        {{--<form action="{{action('ProductsController@update')}}" method="POST">--}}
                            {{--<input name="_method" type="hidden" value="PUT">--}}
                            {{--<input name="product_id" type="hidden" value="{{$product['id']}}">--}}
                            {{--{{csrf_field()}}--}}

                            {{--alle inputs--}}
                            {{--<input type="text" name="name" value="{{$product['name']}}">--}}
                            {{--<input type="text" name="name" value="{{$product->name}}">--}}
                            {{--<input type="hidden" name="description" value="{{$product['description']}}">--}}
                            {{--<input type="hidden" name="price" value="{{$product['price']}}">--}}
                            {{--<input type="hidden" name="sale" value="{{$product['sale']}}">--}}
                            {{--<input type="hidden" name="sale_percentage" value="{{$product['sale_percentage']}}">--}}
                            {{--<input type="hidden" name="img" value="{{$product['img']}}">--}}
                            {{--eind inputs--}}

                            {{--<div class="form-group">--}}
                                {{--<input class="form-control" type="number" name="stock" value="{{$product['stock']}}">--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<input class="btn btn-primary" type="submit">--}}
                            {{--</div>--}}
                        {{--</form>--}}

                        <form action="{{action('ProductsController@update')}}" method="POST">
                            <h1>Edit Item</h1>
                            <input name="_method" type="hidden" value="PUT">
                            <input name="id" type="hidden" value="{{$product['id']}}">
                            {{csrf_field()}}

                            <div class="form-group noDisplay">

                                <label for="name">Product name</label>
                                <input class="form-control" type="text" name="name" value="{{$product['name']}}">
                            </div>

                            <div class="form-group noDisplay">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" cols="30" rows="10">{{$product['description']}}</textarea>
                            </div>

                            <div class="form-group noDisplay">
                                <label for="price">Price</label>
                                <input class="form-control" type="text" name="price" value="{{$product['price']}}">
                            </div>

                            <div class="form-group noDisplay">
                                <label for="sale">Sale</label>
                                <select name="sale" class="form-control"  >
                                    <option value="1" @if($product['sale'] == 1) selected="selected" @endif>Yes</option>
                                    <option value="0" @if($product['sale'] == 0) selected="selected" @endif>No</option>
                                </select>
                            </div>

                            <div class="form-group noDisplay">
                                <label for="sale_percentage">Sale Percentage</label>
                                <input class="form-control" type="number" name="sale_percentage" value="{{$product['sale_percentage']}}">
                            </div>

                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input class="form-control" type="number" name="stock" value="{{$product['stock'] - 1}}">
                            </div>

                            <div class="form-group noDisplay">
                                <label for="img">Image</label>
                                <input class="form-control" type="text" name="img" value="{{$product['img']}}">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Edit Product">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection