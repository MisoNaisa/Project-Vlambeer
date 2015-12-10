<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';

    public $timestamp = false;

    protected $fillable = ['game_name'
                            , 'game_background_video'
                            , 'game_background_img'
                            , 'custom_payment_link'
                            , 'steam_payment_link'
                            , 'ios_payment_link'
                            , 'psn_payment_link'
                            , 'android_payment_link'];
}
