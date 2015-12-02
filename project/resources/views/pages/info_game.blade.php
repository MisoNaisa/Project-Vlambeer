@extends('layout.master')

@section('bodyAttributes')
    class="info-game"
@endsection

@section('section')


    <div style="width: 100%;"
         data-vide-bg="mp4: ../video/serious-sam, poster: path/to/poster"
         data-vide-options="posterType: jpg, loop: true, position: 0% 0%; ">
        <div class="video-table">
            <div class="table-holder"></div>
            <i class="fa fa-volume-up hidden noselect"></i>
            <i class="fa fa-volume-off noselect"></i>
            <h1>Serious sam</h1>

        </div>
    </div>

    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ducimus eos et fuga, fugit, id illum impedit in inventore, maiores minima nesciunt nisi officiis quibusdam quidem rem rerum tenetur vel.</p>
    </div>
@endsection