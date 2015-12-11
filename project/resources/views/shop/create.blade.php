@extends('layout.master')

@section('section')
    <div class="container">

        <h3>Add Item</h3>

        <form class="col-md-4" action="{{action('ProductsController@store')}}" method="POST">

            {{csrf_field()}}

            <div class="form-group">
                <label for="name">Product name</label>
                <input class="form-control" type="text" name="name">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" type="text" name="description">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="text" name="price">
            </div>

            <div class="form-group">
                <label for="sale">Sale</label>
                <input class="form-control" type="checkbox" name="sale">
            </div>

            <div class="form-group">
                <label for="sale_percentage">Sale Percentage</label>
                <input class="form-control" type="number" name="sale_percentage">
            </div>

            <div class="form-group">
                <label for="stock">Stock</label>
                <input class="form-control" type="number" name="stock">
            </div>

            <div class="form-group">
                <label for="mg">Product Image</label>
                <input class="form-control" type="text" name="img" >
            </div>


            <div class="form-group">
                <input class="btn btn-primary" type="submit">
            </div>


        </form>
    </div>

@endsection