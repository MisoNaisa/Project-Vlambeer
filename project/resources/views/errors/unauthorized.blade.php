@extends('layout.master')

@section('section')
    <div class="container">
        <div class="content">
            <h1 class="title">You are not authorized to be here.</h1>
        </div>
        <form class="col-md-4 col-md-push-4" method="POST" action="/login">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h1>Login</h1>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" value="{{ old('password') }}">
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Login">
            </div>

            <div class="form-group">
                <a href="/register" class="btn btn-primary">Register</a>
            </div>
        </form>
    </div>
@endsection