@extends('layout.master')

    @section('bodyAttributes')
        class="overview-games"
    @endsection

    @section('section')
        <div class="container">
            <div class="game-overview">
                @foreach($gamesArray as $game)
                    <div class="game-box col-md-5 col-md-push-1" onclick="javascript:location.href='info_game/{{$game['id']}}'">
                        <div class="img" style="background: url('{{$game['game_bg']}}')">
                            <div class="description">
                                <h4> {!! $game['deck'] !!}</h4>
                                <a href="info_game/{{$game['id']}}">Read more...</a>
                            </div>
                        </div>
                        <div class="title">
                            <h1><a href="info_game/{{$game['id']}}"> {{$game['name']}}</a></h1>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @stop
