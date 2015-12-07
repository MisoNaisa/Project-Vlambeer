@extends('layout.master')

@section('bodyAttributes')
    class="info-game"
@endsection

@section('section')

    <div style="width: 100%";
         data-vide-bg="mp4: ../video/{{$gameInfo['game_background_video']}}"
         data-vide-options="posterType: jpg, loop: true, position: 0% 0%; ">
        <div class="video-table">
            <div class="table-holder"></div>
            <i class="fa fa-volume-up hidden noselect"></i>
            <i class="fa fa-volume-off noselect"></i>
            <h1>{{$gameInfo['name']}}</h1>
        </div>
    </div>

    <div class="container">

        <div class="gameinfo">
            <div id="slider">
                <a class="control_next noselect"><i class="fa fa-arrow-right"></i></a>
                <a class="control_prev noselect"><i class="fa fa-arrow-left"></i></a>
                <ul>
                    @foreach($gameInfo['images'] as $img)
                        <li><img src="{{ $img['medium_url'] }}" /></li>
                    @endforeach
                </ul>
            </div>
            {!! $gameDesc !!}
        </div>
    </div>
@endsection