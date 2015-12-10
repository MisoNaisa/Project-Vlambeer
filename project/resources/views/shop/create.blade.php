@extends('layout.master')

@section('section')
    <div class="container">

        <h3>Add Item</h3>

        <form class="col-md-4" action="{{action('ProductsController@create')}}" method="POST">
            <input name="_method" type="hidden" value="PUT">
            <input name="product_id" type="hidden" value="">
            {{csrf_field()}}

            <div class="form-group">
                <label for="product_name">Product name</label>
                <input class="form-control" type="text" name="product_name">
            </div>

            <div class="form-group">
                <label for="product_description">Description</label>
                <input class="form-control" type="text" name="product_description">
            </div>

            <div class="form-group">
                <label for="product_price">Price</label>
                <input class="form-control" type="text" name="product_price">
            </div>

            <div class="form-group">
                <label for="product_sale">Sale</label>
                <input class="form-control" type="checkbox" name="product_sale">
            </div>

            <div class="form-group">
                <label for="product_sale_percentage">Sale Percentage</label>
                <input class="form-control" type="number" name="product_sale_percentage">
            </div>

            <div class="form-group">
                <label for="product_stock">Stock</label>
                <input class="form-control" type="number" name="product_stock">
            </div>

            <div class="form-group">
                <label for="product_img">Image</label>
                <input class="form-control" type="file" name="product_img">
            </div>


            <div class="form-group">
                <input class="btn btn-primary" type="submit">
            </div>


        </form>
    </div>

@endsection

