@extends('layout.master')

@section('section')
    <div class="game-post">
        @foreach($games as $game)
            <img src={{$game['game_background_img']}}>
            <div class="title">
                <h1>{{$game['game_name']}}</h1>
            </div>
            <p>
                {{$game['description']}}
            </p>
        @endforeach
@endsection