@extends('layout.master_admin')

@section('section')
    <span class="csrf">
        {{csrf_field()}}
    </span>
    <div class="container">
        <h1>Game's management</h1>
        <div class="debug">
        <form action="">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th class="button"><a href="games/create">add</a></th>
                </tr>
                </thead>
                <tbody>
                @foreach($allGames as $game)
                    <tr class="clickable">
                        <td>{{$game['attributes']['game_name']}}</td>
                        <td class="button btn-delete">delete</td>
                        <td style="display: none" class="button btn-save">save</td>
                    </tr>
                    <tr class="detail" id="{{ $game['attributes']['id'] }}">
                        <td colspan="100%">
                            <table class="table">
                                <tr>
                                    <td>background image:</td>
                                    <td><input class="game_background_img" type="text" value="{{$game['attributes']['game_background_img']}}"></td>
                                </tr>
                                <tr>
                                    <td>background video:</td>
                                    <td><input class="game_background_video" type="text" value="{{$game['attributes']['game_background_video']}}"></td>
                                </tr>
                                <tr>
                                    <td>custom payment link</td>
                                    <td><input class="custom_payment_link" type="text" value="{{$game['attributes']['custom_payment_link']}}"></td>
                                </tr>
                                <tr>
                                    <td>steam payment link</td>
                                    <td><input class="steam_payment_link" type="text" value="{{$game['attributes']['steam_payment_link']}}"></td>
                                </tr>
                                <tr>
                                    <td>ios payment link</td>
                                    <td><input class="ios_payment_link" type="text" value="{{$game['attributes']['ios_payment_link']}}"></td>
                                </tr>
                                <tr>
                                    <td>psn payment link</td>
                                    <td><input class="psn_payment_link" type="text" value="{{$game['attributes']['psn_payment_link']}}"></td>
                                </tr>
                                <tr>
                                    <td>android payment link</td>
                                    <td><input class="android_payment_link" type="text" value="{{$game['attributes']['android_payment_link']}}"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>
    </div>
</div>
@endsection