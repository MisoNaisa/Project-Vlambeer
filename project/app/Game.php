<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';

    public static $rules = array(
        'id' => 'unique'
    );
}
