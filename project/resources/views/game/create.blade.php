@extends('layout.master')

@section('section')
<div class="container">

    <h3>Add Game</h3>

    <form class="col-md-4" action="/GameController" method="post">

        <div class="form-group">
            <label for="game_name">Game</label>
            <input class="form-control" type="text" name="game_name">
        </div>

        <div class="form-group">
            <label for="game_background_video">Game Background Video</label>
            <input class="form-control" type="text" name="game_background_video">
        </div>

        <div class="form-group">
            <label for="game_background_image">Game Background Image</label>
            <input class="form-control" type="text" name="game_background_image">
        </div>

        <div class="form-group">
            <label for="poster">Game Poster Image</label>
            <input class="form-control" type="text" name="poster">
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit">
        </div>


    </form>
</div>

@endsection