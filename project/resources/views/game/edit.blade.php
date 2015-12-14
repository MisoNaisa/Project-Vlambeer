@extends('layout.master')

@section('section')
    <div class="container">
        <div class="col-md-6 col-md-push-3">
            <h3>Edit Game</h3>

            <form action="{{action('GamesController@update')}}" method="POST">
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

                <d3iv class="form-group">
                    <label for="custom_payment_link">Game custom payment link</label>
                    <input class="form-control" type="text" name="custom_payment_link" value="{{$game['custom_payment_link']}}">
                </d3iv>

                <div class="form-group">
                    <label for="steam_payment_link">Game steam payment link</label>
                    <input class="form-control" type="text" name="steam_payment_link" value="{{$game['steam_payment_link']}}">
                </div>

                <div class="form-group">
                    <label for="ios_payment_link">Game ios payment link</label>
                    <input class="form-control" type="text" name="ios_payment_link" value="{{$game['ios_payment_link']}}">
                </div>

                <div class="form-group">
                    <label for="psn_payment_link">Game psn payment link</label>
                    <input class="form-control" type="text" name="psn_payment_link" value="{{$game['psn_payment_link']}}">
                </div>

                <div class="form-group">
                    <label for="android_payment_link">Game android payment link</label>
                    <input class="form-control" type="text" name="android_payment_link" value="{{$game['android_payment_link']}}">
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit">
                </div>
            </form>
        </div>
    </div>

@endsection