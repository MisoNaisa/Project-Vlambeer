@extends('layout.master')

@section('bodyAttributes')
    class="info-game"
@endsection

@section('section')


    <div style="width: 100%;"
         data-vide-bg="mp4: ../video/serious-sam, poster: http://cdn.dbolical.com/videos/games/1/17/16583/Serious_Sam_The_Random_Encounter_-_Launch_Trailer.mp4.jpg"
         data-vide-options="posterType: jpg, loop: true, position: 0% 0%; ">
        <div class="video-table">
            <div class="table-holder"></div>
            <i class="fa fa-volume-up hidden noselect"></i>
            <i class="fa fa-volume-off noselect"></i>
            <h1>{{$gamesArray['name']}}</h1>

        </div>
    </div>

    <div class="container">


        <div id="slider">
            <a class="control_next noselect"><i class="fa fa-arrow-right"></i></a>
            <a class="control_prev noselect"><i class="fa fa-arrow-left"></i></a>
            <ul>


                @foreach($gamesArray['images'] as $img)

                    <li><img src="{{ $img['medium_url'] }}" /></li>

                @endforeach
            </ul>
        </div>

        <div class="gameInfo">



            {{ print_r(preg_replace("/<img[^>]+\>/i", "",str_replace('href="','target="_blank" href="http://giantbomb.com',$gamesArray['description']))) }}
        </div>


    </div>
@endsection