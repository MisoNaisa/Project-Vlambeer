@extends('layout.master')

@section('section')
    <div class="container">
        <div class="unsub">
            @if($user->insertion)
                <h2>{{'Hello ' . $user->first_name . ' ' . $user->insertion . ' ' . $user->last_name . '!'}}</h2>
            @else
                <h2>{{'Hello ' . $user->first_name . ' ' . $user->last_name . '!'}}</h2>
            @endif

            <p>Are you sure you want to unsubscribe from the newsletter? <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ad adipisci, consectetur deleniti dolor, inventore ipsum laboriosam magni minima minus molestias
                neque nihil officiis placeat quibusdam recusandae sapiente vel vitae voluptate?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Consequatur dolor doloribus fuga iure numquam ratione rem repellendus similique tempore temporibus?
                Dolores error fugit illo minus mollitia possimus temporibus veniam voluptatibus?</p>
                <button>No</button>
                <button>Yes</button>
        </div>
    </div>

@endsection




