@extends('layout.master_admin')

@section('section')
    <span class="csrf">
        {{csrf_field()}}
    </span>
    <div class="container">
        <h1>Products management</h1>
        <div class="debug">
            <form action="">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th class="button"><a href="games/create">add</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productArray as $product)
                        <tr class="clickable">
                            <td>{{$product['attributes']['name']}}</td>
                            <td class="button btn-delete btn-danger">delete</td>
                            <td style="display: none" class="button btn-save btn-success">save</td>
                        </tr>
                        <tr class="detail" id="{{ $product['attributes']['id'] }}">
                            <td colspan="100%">
                                <table class="table">
                                    <tr>
                                        <td>Name</td>
                                        <td><input class="name" type="text" value="{{$product['attributes']['name']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td><textarea name="description" id="description" cols="30" rows="10"style="background: #75190A; width: 100%;">{{$product['attributes']['description']}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td><input class="price" type="text" value="{{$product['attributes']['price']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td><input class="category" type="text" value="{{$product['attributes']['category']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Sale</td>
                                        <td><input class="sale" type="text" value="{{$product['attributes']['sale']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Sale percentage</td>
                                        <td><input class="sale_percentage" type="text" value="{{$product['attributes']['sale_percentage']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Stock</td>
                                        <td><input class="stock" type="text" value="{{$product['attributes']['stock']}}"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection