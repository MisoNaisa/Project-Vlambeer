@extends('layout.master')


    @section('section')
        <div class="container">
            <div class="game-overview">
                @foreach($gamesArray as $game)
                    <div class="game-box col-md-5 col-md-push-1">
                        <div class="img" style="background: url( {{$game['game_bg']}} )">
                            <div class="description"> {!! $game['deck'] !!} </div>
                        </div>
                        <div class="title">
                            <h1><a href=""> {{$game['name']}}</a></h1>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    @endsection
