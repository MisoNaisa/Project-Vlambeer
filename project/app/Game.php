<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';

    public $timestamp = false;

    protected $fillable = ['game_name', 'game_background_video', 'game_background_image', 'poster'];
}
