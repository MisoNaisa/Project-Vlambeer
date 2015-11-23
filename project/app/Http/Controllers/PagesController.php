<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function index() {
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();
        $games = \App\Game::all();
        return view('pages.index', compact('games', 'tweetV', 'tweetR', 'tweetJ'));
    }

    public function contact() {
        $tweetV = $this->getStatusVlambeer();
        $tweetR = $this->getStatusRami();
        $tweetJ = $this->getStatusJan();
        return view('pages.contact');
    }

    public function overview_games() {
        $tweetV = $this->getStatusVlambeer();
        $tweetR = $this->getStatusRami();
        $tweetJ = $this->getStatusJan();
        return view('pages.overview_games');
    }

    public function info_game() {
        $tweetV = $this->getStatusVlambeer();
        $tweetR = $this->getStatusRami();
        $tweetJ = $this->getStatusJan();
        return view('pages.info_game');
    }
}
