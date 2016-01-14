@extends('layout.master')

@section('section')
    <div class="container ">



        <form class="col-md-4 col-md-push-4" action="{{action('ProductsController@update')}}" method="POST">
            <h1>Edit Item</h1>
            <input name="_method" type="hidden" value="PUT">
            <input name="id" type="hidden" value="{{$product['id']}}">
            {{csrf_field()}}

            <div class="form-group">

                <label for="name">Product name</label>
                <input class="form-control" type="text" name="name" value="{{$product['name']}}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10">{{$product['description']}}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="text" name="price" value="{{$product['price']}}">
            </div>

            <div class="form-group">
                <label for="sale">Sale</label>
                <select name="sale" class="form-control"  >
                    <option value="1" @if($product['sale'] == 1) selected="selected" @endif>Yes</option>
                    <option value="0" @if($product['sale'] == 0) selected="selected" @endif>No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="sale_percentage">Sale Percentage</label>
                <input class="form-control" type="number" name="sale_percentage" value="{{$product['sale_percentage']}}">
            </div>

            <div class="form-group">
                <label for="stock">Stock</label>
                <input class="form-control" type="number" name="stock" value="{{$product['stock']}}">
            </div>

            <div class="form-group">
                <label for="img">Image</label>
                <input class="form-control" type="text" name="img" value="{{$product['img']}}">
            </div>


            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Edit Product">
            </div>


        </form>
    </div>

@endsection

