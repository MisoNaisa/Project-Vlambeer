<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/test', 'GamesController@test');
Route::get('shop/paid', 'ProductsController@paid');
Route::get('/shop/product/{id}', 'ProductsController@show');
Route::get('/shop/payment_failed', 'ProductsController@payment_failed');

Route::resource('/shop', 'ProductsController');

Route::resource('admin/games', 'GamesController');
Route::delete('admin/games/{id}/destroy', 'GamesController@destroy'); // to work with ajax

//Route::resource('/testgiant', 'PagesController@test');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::controllers([
    'password' => 'Auth\PasswordController',
]);