<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public static function getStatusVlambeer() {
        $settings = array(
            'oauth_access_token' => "306688699-IwkZ3SzMCb7L76zRQIwAI4a7HWFz8qj6Wq0IZDWA",
            'oauth_access_token_secret' => "mFFGk3neC1Vcd53zDIojbk6I4bQl2I2S7NsrbC9qrFcbB",
            'consumer_key' => "9w36Arnf4aneDGobWr8pqZ5oe",
            'consumer_secret' => "QQ6ZwaTFZpDsTgvRrcgIbV8R2hGiu0MmfoEjDArYUIuB79holt"
        );
        $url = 'https://api.twitter.com/1.1/users/show.json';
        $getfield = '?screen_name=vlambeer';
        $requestMethod = 'GET';
        $twitter = new \TwitterApiExchange($settings);
        $data = $twitter->setGetField($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();
        $data = json_decode($data);
        return $data;
//    echo $data->location;
    }

    public static function getStatusRami() {
        $settings = array(
            'oauth_access_token' => "306688699-IwkZ3SzMCb7L76zRQIwAI4a7HWFz8qj6Wq0IZDWA",
            'oauth_access_token_secret' => "mFFGk3neC1Vcd53zDIojbk6I4bQl2I2S7NsrbC9qrFcbB",
            'consumer_key' => "9w36Arnf4aneDGobWr8pqZ5oe",
            'consumer_secret' => "QQ6ZwaTFZpDsTgvRrcgIbV8R2hGiu0MmfoEjDArYUIuB79holt"
        );
        $url = 'https://api.twitter.com/1.1/users/show.json';
        $getfield = '?screen_name=tha_rami';
        $requestMethod = 'GET';
        $twitter = new \TwitterApiExchange($settings);
        $data = $twitter->setGetField($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();
        $data = json_decode($data);
        //var_dump($data);
        return $data;

    }

    public static function getStatusJan() {
        $settings = array(
            'oauth_access_token' => "306688699-IwkZ3SzMCb7L76zRQIwAI4a7HWFz8qj6Wq0IZDWA",
            'oauth_access_token_secret' => "mFFGk3neC1Vcd53zDIojbk6I4bQl2I2S7NsrbC9qrFcbB",
            'consumer_key' => "9w36Arnf4aneDGobWr8pqZ5oe",
            'consumer_secret' => "QQ6ZwaTFZpDsTgvRrcgIbV8R2hGiu0MmfoEjDArYUIuB79holt"
        );
        $url = 'https://api.twitter.com/1.1/users/show.json';
        $getfield = '?screen_name=jwaaaap';
        $requestMethod = 'GET';
        $twitter = new \TwitterApiExchange($settings);
        $data = $twitter->setGetField($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();
        $data = json_decode($data);
        //var_dump($data);
        return $data;

    }
}
