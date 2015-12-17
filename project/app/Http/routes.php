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
Route::get('/overview_games', 'PagesController@overview_games');
Route::get('/info_game/{id}', 'PagesController@info_game');
Route::get('/test', 'GamesController@test');
Route::get('/paid', 'ProductsController@paid');


Route::get('/overview_products', 'PagesController@overview_products');
Route::get('/info_product/{id}', 'PagesController@info_products');


Route::resource('/shop', 'ProductsController');

Route::resource('admin/games', 'GamesController');
//Route::group('admin/games', 'GamesController');
Route::delete('admin/games/{id}/destroy', 'GamesController@destroy'); // to work with ajax

//Route::resource('/testgiant', 'PagesController@test');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::controllers([
    'password' => 'Auth\PasswordController',
]);