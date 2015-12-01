@extends('layout.master')


    @section('section')
        <div class="container">
            <div class="game-overview">
                @foreach($games as $game)
                    <div class="game-box col-md-5 col-md-push-1">
                        <div class="img" style="background: url({{$game['game_background_img']}})">
                            <div class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Ad alias, assumenda cum cumque dignissimos ducimus eaque eius eos explicabo magnam
                                maxime nihil pariatur quasi, qui quo saepe, similique temporibus voluptas! </div>
                        </div>
                        <div class="title">
                            <h1><a href=""> {{$game['game_name']}}</a></h1>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    @endsection
