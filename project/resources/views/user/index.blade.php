@extends('layout.master')

@section('section')
    <div class="container">

        @if($user->insertion)
            <h2>{{'Hello ' . $user->first_name . ' ' . $user->insertion . ' ' . $user->last_name . '!'}}</h2>
        @else
            <h2>{{'Hello ' . $user->first_name . ' ' . $user->last_name . '!'}}</h2>
        @endif

        
        {{--          <a href="{{ route('welcome_index', [4, 5]) }}">test</a>--}}

            <?php
            switch($user['newsletter']){
                case 0 : $news = 'No';
                    break;
                case 1 : $news ='Yes';
                    break;

            }
            ?>


            <div class="user col-md-4 col-md-offset-2">
            <a href="/user/{{$user->id}}/edit" class="btn btn-success">Edit</a>
            <div class="user-info">
                <h2>User info</h2>
                <p>Telephone: {{ $user->phonenumber }}</p>
                <p>Email: {{ $user->email }}</p>
                <p>Address: {{ $user->address }}</p>
                <p>House number: {{ $user->housenumber }}</p>
                <p>Zipcode: {{ $user->zipcode }}</p>
                <p>City: {{ $user->city }}</p>
                <p>Country: {{ $user->country }}</p>
                <p>Date of birth: {{ $user->date_of_birth }}</p>
                <p>Newsletter: {{$news
                }}</p>
            </div>
            <div class="order-info">

                <h2>Orders</h2>



                @foreach($orders as $order)

                    <?php
                    switch($order['status']){
                        case 0 : $status = 'Besteld';
                            break;
                        case 1 : $status ='Betaald';
                            break;
                        case 2 : $status = 'Vertraagd';
                            break;
                        case 3 : $status = 'Verzonden';
                            break;
                        case 4 : $status = 'Geleverd';
                            break;
                    }
                    ?>




                    <h3>Order nummer: {{ $order['order_id'] }}</h3>
                    <ul class="list-group">
                        <li>Status: {{$status}}</li>
                        <li>Order Date: {{$order['order_date']}}</li>
                        <a href="/invoices/{{$order['order_id']}}" class="btn btn-warning">PDF</a>
                    </ul>
                @endforeach

            </div>

        </div>
    </div>

@endsection