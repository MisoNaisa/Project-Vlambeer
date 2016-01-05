@extends('layout.master')

@section('section')
  <div class="container">

      @if($user->insertion)
          <h2>{{'Hello ' . $user->first_name . ' ' . $user->insertion . ' ' . $user->last_name . '!'}}</h2>
      @else
          <h2>{{'Hello ' . $user->first_name . ' ' . $user->last_name . '!'}}</h2>
      @endif

        <div class="user col-md-4 col-md-offset-2">
            <div class="btn btn-success">Edit</div>
            <div class="user-info">
                <h2>User info</h2>
                <p>Telephone: {{ $user->phonenumber }}</p>
                <p>Email: {{ $user->email }}</p>
                <p>Address: {{ $user->address }}</p>
                <p>House number: {{ $user->housenumber }}</p>
                <p>Zipcode: {{ $user->zipcode }}</p>
                <p>City: {{ $user->city }}</p>
                <p>Country: {{ $user->country }}</p>
                <p>Date of birth: {{ $user->date_of_birth }}</p>
            </div>

        </div>
  </div>

@endsection