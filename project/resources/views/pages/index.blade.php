@extends('layout.master')

@section('section')
        @foreach($games as $game)
            <div class="game-post">
                <img src={{$game['game_background_img']}}>
                <div class="title">
                    <h1>{{$game['game_name']}}</h1>
                </div>
                <p>
                    {{$game['description']}}
                </p>
                <a href="{{$game['steam_payment_link']}}">
                    <div id="steam"></div>
                </a>

            </div>
        @endforeach
@endsection