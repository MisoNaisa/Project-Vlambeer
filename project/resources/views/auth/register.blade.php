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


        <form class="col-md-4 col-md-push-4" method="POST" action="/auth/register">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h1>Register</h1>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" value="{{ old('password') }}">
            </div>

            <div class="form-group">
                <label for="password_confirmation ">Password_confirmation</label>
                <input class="form-control" type="password" name="password_confirmation">
            </div>

            <div class="form-group">
                <label for="first_name">First name</label>
                <input class="form-control" type="text" name="first_name" value="{{ old('first_name') }}">
            </div>

            <div class="form-group">
                <label for="last_name">Last name</label>
                <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}">
            </div>

            <div class="form-group">
                <label for="insertion">Insertion</label>
                <input class="form-control" type="text" name="insertion" value="{{ old('insertion') }}">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input class="form-control" type="text" name="address" value="{{ old('address') }}">
            </div>

            <div class="form-group">
                <label for="housenumber">Housenumber</label>
                <input class="form-control" type="text" name="housenumber" value="{{ old('housenumber') }}">
            </div>

            <div class="form-group">
                <label for="zipcode">Zipcode</label>
                <input class="form-control" type="text" name="zipcode" value="{{ old('zipcode') }}">
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input class="form-control" type="text" name="city" value="{{ old('city') }}">
            </div>

            <div class="form-group">
                <label for="phonenumber">Phonenumber</label>
                <input class="form-control" type="text" name="phonenumber" value="{{ old('phonenumber') }}">
            </div>

            <div class="form-group">
                <label for="date_of_birth">Date of birth</label>
                <input class="form-control" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}">
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <input class="form-control" type="text" name="country" value="{{ old('country') }}">
            </div>

            <div class="form-group">
                <label for="newsletter">Newsletter</label>
                <select name="newsletter" class="form-control" value="{{ old('newsletter') }}" >
                    <option value="" style="display:none"></option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit">
            </div>


        </form>
    </div>

@endsection