<?php

namespace App\Providers;
use App;
use Illuminate\Support\ServiceProvider;
use \App\Cart_Cache as cart_cache;
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
        session_start();

//        $tmp_path = "tmp.bkp";
//        $path = "twitter.bkp";
//
//        //if file is older then 15min, delete it
//        if( time() > filectime($path)+900){
//            unlink( $path );
//        }
//
//        // if file doesn't exists, search in twitter api and create temp file and twitter file
//        if ( !file_exists( $path ) )
//        {
            $twitter = [
                'tweetV' => \App\Tweet::getStatusVlambeer(),
                'tweetR' => \App\Tweet::getStatusRami(),
                'tweetJ' => \App\Tweet::getStatusJan()
            ];
//
//            // create temp file file.
//            file_put_contents( $path,  serialize($twitter)  );
//            //give temp file read rights
//            chmod( $path, 0666 );
//
//
//        }
//
//        //get the info out of the file
//        $twitter = file_get_contents( $path );
//
//        //if file isn't empty, use file
//        if ( !empty( $twitter ) )
//        {
//
//            $twitter = unserialize($twitter);
//            //select file
//            touch( $tmp_path );
//            //copy twitter file to temp
//            copy( $path, $tmp_path );
//        }   else {
//            //if file is empty use temp file
//
//            $twitter = file_get_contents( $tmp_path );
//            $twitter = unserialize($twitter);
//        }

        view()->share('twitter', $twitter);

//        Cookie cart set
        if ( empty($_COOKIE['cart']) ) {
            setcookie("cart", '[]');
        }

//      GET IP
        if (!empty ($_SERVER['REMOTE_ADDR'])) {
            $ip = $_SERVER['REMOTE_ADDR'];
        } else {
            $ip = 0;
        }
        
        $migrateTest = ( count( DB::select( "SHOW TABLES LIKE 'cart_cache'" ), true ) > 0 );


        if ($migrateTest) {
            //SESSION CART CACHE
            if (!empty($_SESSION['cart_cache_id'])) {
                cart_cache::query()
                    ->where('id', $_SESSION['cart_cache_id'])
                    ->update(['products' => $_COOKIE['cart']]);
            } else {
                $id = cart_cache::create(
                    [
                        'ip_address' => $ip
                    ]
                );
                $_SESSION['cart_cache_id'] = $id->id;
            }
        }
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
