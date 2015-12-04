<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'id'=>'1',
            'game_name'=>'Gun Godz',
            'game_background_img'=>'http://www.vlambeer.com/wp-content/uploads/2012/02/LOGO-510x286.png',
            'steam_payment_link'=>'http://venuspatrol.com/subscribe/#subscriptionform',
        ]);
        DB::table('games')->insert([
            'id'=>'2',
            'game_name'=>'Serious Sam: The Random Encounter',
            'game_background_img'=>'http://cdn.dbolical.com/videos/games/1/17/16583/Serious_Sam_The_Random_Encounter_-_Launch_Trailer.mp4.jpg',
            'steam_payment_link'=>'http://store.steampowered.com/app/201480/',
        ]);
        DB::table('games')->insert([
            'id'=>'3',
            'game_name'=>'Super Crate Box',
            'game_background_img'=>'http://www.vlambeer.com/wp-content/uploads/2012/01/header-510x186.png',
            'steam_payment_link'=>'http://store.steampowered.com/app/212800/?l=dutch',
            'ios_payment_link'=>'https://itunes.apple.com/us/app/super-crate-box/id483025428?mt=8',
            'psn_payment_link'=>'https://www.playstation.com/en-gb/games/super-crate-box-psvita/'
        ]);
        DB::table('games')->insert([
            'id'=>'4',
            'game_name'=>'Luftrausers',
            'game_background_img'=>'http://www.rockpapershotgun.com/images/12/apr/Luftrausers.jpg',
            'steam_payment_link'=>'http://store.steampowered.com/app/233150/?l=dutch',
            'psn_payment_link'=>'https://www.playstation.com/nl-nl/games/luftrausers-ps3/'
        ]);
        DB::table('games')->insert([
            'id'=>'5',
            'game_name'=>'Super Bread Box',
            'game_background_img'=>'http://2.bp.blogspot.com/-VlIgr-BUODY/UHIeLXjoORI/AAAAAAAACqw/6AkQhX849yI/s1600/sbb.png',
            'regular_payment_link'=>'http://superbreadbox.com/'
        ]);
        DB::table('games')->insert([
            'id'=>'6',
            'game_name'=>'Ridiculous Fishing',
            'game_background_img'=>'http://www.vlambeer.com/wp-content/uploads/2012/04/bgSplash.png',
            'ios_payment_link'=>'https://itunes.apple.com/us/app/ridiculous-fishing-tale-redemption/id601831815?l=nl&ls=1&mt=8',
            'android_payment_link'=>'https://play.google.com/store/apps/details?id=com.vlambeer.RidiculousFishing'
        ]);
    }
}
