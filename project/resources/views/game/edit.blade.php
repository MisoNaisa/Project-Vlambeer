@extends('layout.master')

@section('section')
    <div class="container">

        <h3>Edit Game</h3>

        <form class="col-md-4" action="{{action('GamesController@update')}}" method="POST">
            <input name="_method" type="hidden" value="PUT">
            <input name="game_id" type="hidden" value="{{$game['id']}}">
            {{csrf_field()}}

            <div class="form-group">
                <label for="game_name">Game</label>
                <input class="form-control" type="text" name="game_name" value="{{$game['game_name']}}" readonly>
            </div>

            <div class="form-group">
                <label for="game_background_video">Game Background Video</label>
                <input class="form-control" type="text" name="game_background_video" value="{{$game['game_background_video']}}">
            </div>

            <div class="form-group">
                <label for="game_background_image">Game Background Image</label>
                <input class="form-control" type="text" name="game_background_img" value="{{$game['game_background_img']}}">
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit">
            </div>


        </form>
    </div>

@endsection