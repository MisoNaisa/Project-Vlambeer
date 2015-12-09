@extends('layout.master')

@section('bodyAttributes')
    class="info-game @if (!empty($gameInfo['game_background_video'])) video-enable @endif"
@endsection

@section('section')

    @if (!empty($gameInfo['game_background_video']))
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
    @endif

    <div class="container">

        <div class="gameinfo">
            <div class="flexslider">
                <ul class="slides">
                    @foreach($gameInfo['images'] as $img)
                        <li><img src="{{ $img['medium_url'] }}" /></li>
                    @endforeach
                </ul>
            </div>
            {!! $gameDesc !!}
        </div>
    </div>
@endsection