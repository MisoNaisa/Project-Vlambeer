@extends('layout.master')

@section('bodyAttributes')
    @yield('bodyAttributes')
@endsection

@section('section')


    <div class="container">
        <div class="row shop-hotfix">
            <div class="col-md-2 aside">
                <p class="title">Vlambeer Shop</p>

                <div class="list-group">
                    <a href="#" class="list-group-item">Clothes</a>
                    <a href="#" class="list-group-item">Music</a>
                    <a href="#" class="list-group-item">Bundles</a>
                    <a href="#" class="list-group-item">Miscellaneous</a>
                </div>

                <div class="login list-group">
                    @if(Auth::user())

                        {{ Auth::user()->email }}
                        <a href="/logout" class="list-group-item">Logout</a>

                    @else
                        <a href="/login" class="list-group-item">Login</a>
                        <a href="/register" class="list-group-item">Register</a>
                    @endif()
                    <p class="list-group-item"><i class="fa fa-shopping-cart"></i></p>
                </div>
            </div>

            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
@endsection