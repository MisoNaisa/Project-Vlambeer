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
        <img src="http://lorempixel.com/500/200" alt="img">
        <div class="title">
            <h1>Serious Sam: The Random Encounter</h1>
            <h3>Word een met je innerlijke beer</h3>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque in magni perferendis quaerat temporibus unde vero?
            Blanditiis dolorum ducimus, expedita fugit incidunt natus nisi obcaecati porro quia reiciendis. Dicta, voluptates.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam deleniti quasi velit! Adipisci atque dolorem eaque itaque nam omnis tempora
            vel. Aliquam aspernatur autem consectetur eligendi quasi quos, velit!
        </p>
        <div id="steam"></div>
    </div>

    <div class="game-post">
        <img src="http://lorempixel.com/500/200" alt="img">
        <div class="title">
            <h1>Kazenspel</h1>
            <h3>Word een met je innerlijke beer</h3>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque in magni perferendis quaerat temporibus unde vero?
            Blanditiis dolorum ducimus, expedita fugit incidunt natus nisi obcaecati porro quia reiciendis. Dicta, voluptates.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam deleniti quasi velit! Adipisci atque dolorem eaque itaque nam omnis tempora
            vel. Aliquam aspernatur autem consectetur eligendi quasi quos, velit!
        </p>
        <div id="steam"></div>
    </div>

    <div class="game-post">
        <img src="http://lorempixel.com/500/200" alt="img">
        <div class="title">
            <h1>Kazenspel</h1>
            <h3>Word een met je innerlijke beer</h3>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque in magni perferendis quaerat temporibus unde vero?
            Blanditiis dolorum ducimus, expedita fugit incidunt natus nisi obcaecati porro quia reiciendis. Dicta, voluptates.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam deleniti quasi velit! Adipisci atque dolorem eaque itaque nam omnis tempora
            vel. Aliquam aspernatur autem consectetur eligendi quasi quos, velit!
        </p>
        <div id="steam"></div>
    </div>

@endsection