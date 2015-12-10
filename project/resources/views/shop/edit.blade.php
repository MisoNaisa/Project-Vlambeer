@extends('layout.master')

@section('section')
    <div class="container">



        <form class="col-md-4 col-md-push-4" action="{{--{{action('ProductsController@edit')}}--}}" method="POST">
            <h1>Edit Item</h1>
            <input name="_method" type="hidden" value="PUT">
            <input name="product_id" type="hidden" value="{{--{{$item['product_id']}}--}}">
            {{csrf_field()}}

            <div class="form-group">

                <label for="product_name">Product name</label>
                <input class="form-control" type="text" name="product_name" value="{{--{{$item['product_name']}}--}}" readonly>
            </div>

            <div class="form-group">
                <label for="product_description">Description</label>
                <input class="form-control" type="text" name="product_description" value="{{--{{$item['product_description']}}--}}">
            </div>

            <div class="form-group">
                <label for="product_price">Price</label>
                <input class="form-control" type="text" name="product_price" value="{{--{{$item['product_price']}}--}}">
            </div>

            <div class="form-group">
                <label for="product_sale">Sale</label>
                <input class="form-control btn_sale" type="checkbox" name="product_sale" value="{{--{{$item['product_sale']}}--}}">
            </div>

            <div class="form-group">
                <label for="product_sale_percentage">Sale Percentage</label>
                <input class="form-control" type="number" name="product_sale_percentage" value="{{--{{$item['product_sale_percentage']}}--}}">
            </div>

            <div class="form-group">
                <label for="product_stock">Stock</label>
                <input class="form-control" type="number" name="product_stock" value="{{--{{$item['product_stock']}}--}}">
            </div>

            <div class="form-group">
                <label for="product_img">Image</label>
                <input class="form-control" type="file" name="product_img" value="{{--{{$item['product_img']}}--}}">
            </div>


            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Edit Product">
            </div>


        </form>
    </div>

@endsection

