@extends('layout.master')

@section('section')
    @foreach($games as $game)
        <div class="game-post">
            <div class="img" style="background: url({{$game['game_background_img']}})"> </div>
            <div class="title">
                <h1>{{$game['game_name']}}</h1>
            </div>
            <p>
                {{$game['description']}}
            </p>

            <div class="game-buy">
                <h2>Buy This game here for:</h2>
                @if($game['game_name'] == "Gun Godz")
                    <a href="{{$game['steam_payment_link']}}">
                        <div id="venuspatrol"></div>
                    </a>
                @endif
                @if($game['steam_payment_link'] != null && $game['game_name'] != "Gun Godz")
                    <a href="{{$game['steam_payment_link']}}">
                        <div id="steam"></div>
                    </a>
                @endif
                @if($game['ios_payment_link'] != null)
                    <a href="{{$game['ios_payment_link']}}">
                        <div id="apple"></div>
                    </a>
                @endif
                @if($game['vita_payment_link'] != null)
                    <a href="{{$game['vita_payment_link']}}">
                        <div id="playstation"></div>
                    </a>
                @endif
                @if($game['game_name'] == "Super Bread Box")
                    <a href="{{$game['regular_payment_link']}}">
                        <div id="superbreadbox"></div>
                    </a>
                @endif
                @if($game['game_name'] == "Ridiculous Fishing")
                    <a href="{{$game['regular_payment_link']}}">
                        <div id="android"></div>
                    </a>
                    <a href="{{$game['ios_payment_link']}}">
                        <div id="apple"></div>
                    </a>
                @endif
            </div>
        </div>
    @endforeach
@endsection