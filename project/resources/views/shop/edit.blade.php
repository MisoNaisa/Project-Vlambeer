@extends('layout.master')

@section('section')
    <div class="container">



        <form class="col-md-4 col-md-push-4" action="{{action('ProductsController@update')}}" method="POST">
            <h1>Edit Item</h1>
            <input name="_method" type="hidden" value="PUT">
            <input name="id" type="hidden" value="{{$product['id']}}">
            {{csrf_field()}}

            <div class="form-group">

                <label for="product_name">Product name</label>
                <input class="form-control" type="text" name="product_name" value="{{$product['name']}}" readonly>
            </div>

            <div class="form-group">
                <label for="product_description">Description</label>
                <input class="form-control" type="text" name="product_description" value="{{$product['product_description']}}">
            </div>

            <div class="form-group">
                <label for="product_price">Price</label>
                <input class="form-control" type="text" name="product_price" value="{{$product['product_price']}}">
            </div>

            <div class="form-group">
                <label for="product_sale">Sale</label>
                <input class="form-control btn_sale" type="checkbox" name="product_sale" value="{{$product['product_sale']}}">
            </div>

            <div class="form-group">
                <label for="product_sale_percentage">Sale Percentage</label>
                <input class="form-control" type="number" name="product_sale_percentage" value="{{$product['product_sale_percentage']}}">
            </div>

            <div class="form-group">
                <label for="product_stock">Stock</label>
                <input class="form-control" type="number" name="product_stock" value="{{$product['product_stock']}}">
            </div>

            <div class="form-group">
                <label for="product_img">Image</label>
                <input class="form-control" type="file" name="product_img" value="{{$product['product_img']}}">
            </div>


            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Edit Product">
            </div>


        </form>
    </div>

@endsection

