@extends('layout.master_admin')

@section('section')
    <div class="container">
        <h1>Game's beheren</h1>

        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allGames as $game)
                <tr class="clickable" id="{{ $game['attributes']['id'] }}">
                    <td>{{$game['attributes']['game_name']}}</td>
                </tr>
                <tr class="detail">
                    <td>
                        <table class="table">
                            <tr>
                                <td>background image:</td>
                                <td>{{$game['attributes']['game_background_img']}}</td>
                            </tr>
                            <tr>
                                <td>background video:</td>
                                <td>{{$game['attributes']['game_background_video']}}</td>
                            </tr>
                            <tr>
                                <td>custom payment link</td>
                                <td>{{$game['attributes']['custom_payment_link']}}</td>
                            </tr>
                            <tr>
                                <td>steam payment link</td>
                                <td>{{$game['attributes']['steam_payment_link']}}</td>
                            </tr>
                            <tr>
                                <td>ios payment link</td>
                                <td>{{$game['attributes']['ios_payment_link']}}</td>
                            </tr>
                            <tr>
                                <td>psn payment link</td>
                                <td>{{$game['attributes']['psn_payment_link']}}</td>
                            </tr>
                            <tr>
                                <td>android payment link</td>
                                <td>{{$game['attributes']['android_payment_link']}}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection