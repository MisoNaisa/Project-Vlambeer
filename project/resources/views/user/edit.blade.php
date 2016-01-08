@extends('layout.master')

@section('section')
    <div class="container">
        <div class="col-md-6 col-md-push-3">
            <h3>Edit user info</h3>

            <form action="{{action('UsersController@update')}}" method="POST">
                <input name="_method" type="hidden" value="PUT">
                <input name="user_id" type="hidden" value="{{$user->id}}">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="first_name">First name</label>
                    <input class="form-control" type="text" name="first_name" value="{{$user->first_name}}">
                </div>

                <div class="form-group">
                    <label for="insertion">Insertion</label>
                    <input class="form-control" type="text" name="insertion" value="{{$user->insertion}}">
                </div>

                <div class="form-group">
                    <label for="last_name">Last name</label>
                    <input class="form-control" type="text" name="last_name" value="{{$user->last_name}}">
                </div>

                <d3iv class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" value="{{$user->email}}">
                </d3iv>

                <div class="form-group">
                    <label for="phonenumber">Phone number</label>
                    <input class="form-control" type="text" name="phonenumber" value="{{$user->phonenumber}}">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input class="form-control" type="text" name="address" value="{{ $user->address }}">
                </div>

                <div class="form-group">
                    <label for="housenumber">House number</label>
                    <input class="form-control" type="text" name="housenumber" value="{{ $user->housenumber }}">
                </div>

                <div class="form-group">
                    <label for="zipcode">Zipcode</label>
                    <input class="form-control" type="text" name="zipcode" value="{{ $user->zipcode }}">
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input class="form-control" type="text" name="city" value="{{ $user->city }}">
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input class="form-control" type="text" name="country" value="{{ $user->country }}">
                </div>

                <div class="form-group">
                    <label for="date_of_birth">Date of birth</label>
                    <input class="form-control" type="text" name="date_of_birth" value="{{ $user->date_of_birth }}">
                </div>

                <div class="form-group">
                    <label for="newsletter">Newsletter</label>
                    <select name="newsletter" class="form-control"  >
                        <option value="1" @if($user->newsletter == 1) selected="selected" @endif>Yes</option>
                        <option value="0" @if($user->newsletter == 0) selected="selected" @endif>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit">
                </div>
            </form>
        </div>
    </div>

@endsection