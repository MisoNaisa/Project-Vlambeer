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
