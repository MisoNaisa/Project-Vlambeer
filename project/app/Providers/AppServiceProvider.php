<?php

namespace App\Providers;
use App;
use Illuminate\Support\ServiceProvider;
use DB;

use App\Http\Requests;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $twitter = [
            'tweetV' => \App\Tweet::getStatusVlambeer(),
            'tweetR' => \App\Tweet::getStatusRami(),
            'tweetJ' => \App\Tweet::getStatusJan()
        ];

        view()->share('twitter', $twitter);
/*
//        Cookie cart set
        if ( empty($_COOKIE['cart']) ) {
            setcookie("cart", '[]');
        }

//        GET IP
        if (!empty ($_SERVER['REMOTE_ADDR'])) {
            $ip = $_SERVER['REMOTE_ADDR'];
        } else {
            $ip = 0;
        }

//        SESSION CART CACHE
        session_start();
        if ( !empty($_SESSION['cart_cache_id']) ) {
            DB::table('cart_cache')
                ->where('id', $_SESSION['cart_cache_id'])
                ->update(['products' => $_COOKIE['cart']]
                );
        } else {
            $id = DB::table('cart_cache')->insertGetId(
                [
                    'ip_address' => $ip,
                    'created_at' => date('Y-m-d-H:i:s')
                ]
            );
            $_SESSION['cart_cache_id'] = $id;
        }

*/
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
