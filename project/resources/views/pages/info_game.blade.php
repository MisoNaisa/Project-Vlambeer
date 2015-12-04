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
            <h1>Serious sam</h1>

        </div>
    </div>

    <div class="container">


        <div id="slider">
            <a class="control_next noselect"><i class="fa fa-arrow-right"></i></a>
            <a class="control_prev noselect"><i class="fa fa-arrow-left"></i></a>
            <ul>
                <li><img src="http://placehold.it/350x150" /></li>
                <li><img src="http://placehold.it/350x150" /></li>
                <li><img src="http://placehold.it/350x150" /></li>
                <li><img src="http://placehold.it/350x150" /></li>
            </ul>
        </div>

        {{var_dump($gamesArray)}}


        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ducimus eos et fuga, fugit, id illum impedit in inventore, maiores minima nesciunt nisi officiis quibusdam quidem rem rerum tenetur vel.</p>
    </div>
@endsection