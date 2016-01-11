@extends('layout.master')

@section('section')
<div class="title">
    <h1>Shopping cart</h1>
</div>
@foreach($cart as $carts)
    {{ $carts[0] }}
@endforeach

@endsection