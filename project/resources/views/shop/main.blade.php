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
                    @foreach($allProducts as $product)
                        <tr class="clickable">
                            <td>{{$product['attributes']['name']}}</td>
                            <td class="button btn-delete">delete</td>
                            <td style="display: none" class="button btn-save">save</td>
                        </tr>
                        <tr class="detail" id="{{ $product['attributes']['id'] }}">
                            <td colspan="100%">
                                <table class="table">
                                    <tr>
                                        <td>Name</td>
                                        <td><input class="name" type="text" value="{{$product['attributes']['name']}}"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
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