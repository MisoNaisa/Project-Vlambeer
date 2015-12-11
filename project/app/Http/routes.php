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

Route::resource('/shop', 'ProductsController');

Route::resource('admin/games', 'GamesController');
Route::delete('admin/games/{id}/destroy', 'GamesController@destroy');

Route::resource('/testgiant', 'PagesController@test');