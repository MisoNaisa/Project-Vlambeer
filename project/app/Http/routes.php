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
//Route::get('/index', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/overview_games', 'PagesController@overview_games');
Route::get('/info_game', 'PagesController@info_game');
Route::get('/test', 'PagesController@test');




// test routes
Route::get('/twittertest', function(){
    $settings = array(
        'oauth_access_token' => "306688699-IwkZ3SzMCb7L76zRQIwAI4a7HWFz8qj6Wq0IZDWA",
        'oauth_access_token_secret' => "mFFGk3neC1Vcd53zDIojbk6I4bQl2I2S7NsrbC9qrFcbB",
        'consumer_key' => "9w36Arnf4aneDGobWr8pqZ5oe",
        'consumer_secret' => "QQ6ZwaTFZpDsTgvRrcgIbV8R2hGiu0MmfoEjDArYUIuB79holt"
    );
    $url = 'https://api.twitter.com/1.1/users/show.json';
    $getfield = '?screen_name=vlambeer';
    $requestMethod = 'GET';
    $twitter = new TwitterApiExchange($settings);
    $data = $twitter->setGetField($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest();
    $data = json_decode($data);
var_dump($data);
    die();
//    echo $data->location;
});