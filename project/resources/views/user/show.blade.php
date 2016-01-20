@extends('layout.master')

@section('section')


    <div class="container @if(!(empty($status))) message_user {{$status}} @endif">
        <div style="padding-left: 19px;" class="col-md-12">
            @if($user->insertion)
                <h2>{{'Hello ' . $user->first_name . ' ' . $user->insertion . ' ' . $user->last_name . '!'}}</h2>
            @else
                <h2>{{'Hello ' . $user->first_name . ' ' . $user->last_name . '!'}}</h2>
            @endif
        </div>

        {{--          <a href="{{ route('welcome_index', [4, 5]) }}">test</a>--}}

        <?php
        switch($user['newsletter']){
            case 0 : $news = 'No';
                break;
            case 1 : $news ='Yes';
                break;
        }
        ?>


        <div class="user">
            <div class="row col-md-12">
                <div class="user-info table-bg col-md-6">
                    <div class="title col-md-12">
                        <h2 class="col-md-6">User info</h2>
                        <a href="/user/{{$user->id}}/edit" class="btn btn-success pull-right">Edit</a>
                    </div>
                    <div class="user-info-left col-md-6">
                        <p>Telephone: {{ $user->phonenumber }}</p>
                        <p>Email: {{ $user->email }}</p>
                        <p>Address: {{ $user->address }}</p>
                        <p>House number: {{ $user->housenumber }}</p>
                    </div>
                    <div class="user-info-right col-md-6">
                        <p>Zipcode: {{ $user->zipcode }}</p>
                        <p>City: {{ $user->city }}</p>
                        <p>Country: {{ $user->country }}</p>
                        <p>Date of birth: {{ $user->date_of_birth }}</p>
                        <p>Newsletter: {{$news}}</p>
                    </div>
                </div>
                <div class="order-info table-bg col-md-5">

                    <h2>Orders</h2>

                    <table class="table">
                        <tr>
                            <td>Order nummer</td>
                            <td>Order date</td>
                            <td>Order status</td>
                            <td>Invoice</td>
                        </tr>
                        @foreach($orders as $order)

                            <?php
                            switch($order['status']){
                                case 0 : $status = 'Ordered';
                                    break;
                                case 1 : $status ='Payed';
                                    break;
                                case 2 : $status = 'Delayed';
                                    break;
                                case 3 : $status = 'Send';
                                    break;
                                case 4 : $status = 'Delivered';
                                    break;
                            }
                            ?>

                            <tr>
                                <td>{{ $order['id'] }}</td>
                                <td>{{$order['order_date']}}</td>
                                <td>{{$status}}</td>
                                <td><a href="/invoices/{{$order['id']}}" class="btn btn-warning">PDF</a></td>
                            </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection