<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    private $redirectTo = '/shop';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:60|unique:users|min:6',
            'password' => 'required|confirmed|min:6|max:255',
            'first_name' => 'required|max:60|string',
            'last_name' => 'required|max:60|string',
            'insertion' => 'max:60|string',
            'address' => 'required|max:60|string',
            'housenumber' => 'required|max:60|string',
            'zipcode' => 'required|max:60|string',
            'city' => 'required|max:60|string',
            'phonenumber' => 'required|max:60|string',
            'date_of_birth' => 'required|date',
            'country' => 'required|max:60|string',
            'newsletter' => 'required|boolean',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'first_name' => $data['first_name'],
            'last_name' =>$data['last_name'],
            'insertion' => $data['insertion'],
            'address' => $data['address'],
            'housenumber' => $data['housenumber'],
            'zipcode' => $data['zipcode'],
            'city' => $data['city'],
            'phonenumber' => $data['phonenumber'],
            'date_of_birth' => $data['date_of_birth'],
            'country' => $data['country'],
            'newsletter' => $data['newsletter'],
        ]);
    }
}
