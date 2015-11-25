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
            'game_name'=>'Gun Godz (PC, Mac)',
            'description'=>'Builded with one-year venus patrol subscription & admin atomics capsule',
            'game_background_img'=>'http://www.vlambeer.com/wp-content/uploads/2012/02/LOGO-510x286.png',
            'steam_payment_link'=>'http://venuspatrol.com/subscribe/#subscriptionform',
            'mac_payment_link'=>'http://venuspatrol.com/subscribe/#subscriptionform'
        ]);
        DB::table('games')->insert([
            'id'=>'2',
            'game_name'=>'Serious Sam: The Random Encounter (PC)',
            'description'=>'Serious Sam: The Random Encounter',
            'game_background_img'=>'http://images2.wikia.nocookie.net/__cb20120105005351/serious/images/6/6f/TREMajorMechanoid.jpg',
            'steam_payment_link'=>'http://store.steampowered.com/app/201480/',
        ]);
        DB::table('games')->insert([
            'id'=>'3',
            'game_name'=>'Super Crate Box',
            'description'=>'Super Crate Box',
            'game_background_img'=>'http://pixelannihilation.files.wordpress.com/2010/10/scb.png?w=630',
            'ios_game_background_img'=>'http://a2.mzstatic.com/us/r1000/091/Purple/v4/42/21/79/4221792e-a630-f38e-0dfa-3500b110f2ee/mzm.ubyemkid.175x175-75.jpg',
            'vita_game_background_img'=>'http://uk.playstation.com/media/VHzg0SBQ/161/SuperCrateBox-Featured-image.jpg',
            'steam_payment_link'=>'http://supercratebox.com',
            'ios_payment_link'=>'https://itunes.apple.com/us/app/super-crate-box/id483025428?mt=8',
            'vita_payment_link'=>'https://www.playstation.com/en-gb/games/super-crate-box-psvita/'
        ]);
        DB::table('games')->insert([
            'id'=>'4',
            'game_name'=>'Luftrausers',
            'description'=>'The skies will be set aflame and the seas will overflow with wreckage in Vlambeers stylish arcade shooter LUFTRAUSERS! Select from over 125 combinations of weapons, bodies, and propulsion systems and take to the skies to battle enemy fighter planes, battleships, submarines, and rival aces for glory, honor, and high scores.',
            'game_background_img'=>'http://www.rockpapershotgun.com/images/12/apr/Luftrausers.jpg',
            'regular_payment_link'=>'http://luftrausers.com/'
        ]);
        DB::table('games')->insert([
            'id'=>'5',
            'game_name'=>'Super Bread Box',
            'description'=>'Super Bread Box',
            'game_background_img'=>'http://2.bp.blogspot.com/-VlIgr-BUODY/UHIeLXjoORI/AAAAAAAACqw/6AkQhX849yI/s1600/sbb.png',
            'regular_payment_link'=>'http://superbreadbox.com/'
        ]);
        DB::table('games')->insert([
            'id'=>'6',
            'game_name'=>'Ridiculous Fishing',
            'description'=>'Ridiculous Fishing',
            'game_background_img'=>'http://www.vlambeer.com/wp-content/uploads/2012/04/bgSplash.png',
            'regular_payment_link'=>'http://www.ridiculousfishing.com/'
        ]);
    }
}
