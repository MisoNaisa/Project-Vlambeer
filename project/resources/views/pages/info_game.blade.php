@extends('layout.master')

@section('section')
    {{--<div style="width: 1000px; height: 500px;"--}}
    {{--data-vide-bg="../video/movie480.webm" data-vide-options="loop: true, muted: true, position: 0% 0%">--}}
    {{--</div>--}}

    <div style="width: 100%; height: 500px;"
         data-vide-bg="webm: ../video/serious-sam"
         data-vide-options="posterType: jpg, loop: false, muted: false, position: 0% 0%">
    </div>

    <div class="container"></div>
@endsection