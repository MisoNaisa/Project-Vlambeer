@extends('layout.master_admin')

@section('section')
    <span class="csrf user">
        {{csrf_field()}}
    </span>
    <div class="container user">
        <h1>Users management</h1>
        <div class="debug">
            <form action="">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th class="button"><a href="users/create">add</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="clickable">
                            <td>{{$user['attributes']['first_name']}}</td>
                            <td>{{$user['attributes']['insertion']}}</td>
                            <td>{{$user['attributes']['last_name']}}</td>
                            <td>{{$user['attributes']['address']}}</td>
                            <td>{{$user['attributes']['housenumber']}}</td>
                            <td>{{$user['attributes']['zipcode']}}</td>
                            <td>{{$user['attributes']['city']}}</td>
                            <td>{{$user['attributes']['phonenumber']}}</td>
                            <td class="button btn-delete">delete</td>
                            <td style="display: none" class="button btn-save">save</td>
                        </tr>
                        <tr class="detail" id="{{ $user['attributes']['id'] }}">
                            <td colspan="100%">
                                <table class="table">
                                    <tr>
                                        <td>First name:</td>
                                        <td><input class="user_first_name" type="text" value="{{$user['attributes']['first_name']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Insertion</td>
                                        <td><input class="user_insertion" type="text" value="{{$user['attributes']['insertion']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Last name</td>
                                        <td><input class="user_last_name" type="text" value="{{$user['attributes']['last_name']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td><input type="text" class="user_address" value="{{$user['attributes']['address']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Housenumber</td>
                                        <td><input type="text" class="user_housenumber" value="{{$user['attributes']['housenumber']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Zipcode</td>
                                        <td><input type="text" class="user_zipcode" value="{{$user['attributes']['zipcode']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>City</td>
                                        <td><input type="text" class="user_city" value="{{$user['attributes']['city']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Phonenumber</td>
                                        <td><input type="text" class="phonenumber" value="{{$user['attributes']['phonenumber']}}"></td>
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