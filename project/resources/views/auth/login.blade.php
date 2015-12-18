@extends('layout.master')

@section('section')
    <div class="container">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


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


        </form>
    </div>

@endsection