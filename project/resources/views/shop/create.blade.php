@extends('layout.master')

@section('section')
    <div class="container">



        <form class="col-md-4 col-md-push-4" action="{{action('ProductsController@store')}}" method="POST">
            <h1>Add Item</h1>
            {{csrf_field()}}

            <div class="form-group">
                <label for="name">Product name</label>
                <input class="form-control" type="text" name="name">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="text" name="price">
            </div>

            <div class="form-group">
                <label for="sale">Sale</label>
                <select name="sale" class="form-control"  >
                    <option value="" style="display:none"></option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
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