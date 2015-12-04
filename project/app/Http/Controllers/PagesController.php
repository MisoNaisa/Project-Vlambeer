<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CustomClasses\GiantBomb\Api as GiantBombApi;


class PagesController extends Controller
{

    public function index() {
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();
        $games = \App\Game::all();

//        dd($games);
        return view('pages.index', compact('games', 'tweetV', 'tweetR', 'tweetJ'));
    }

    public function contact() {
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();
        return view('pages.contact', compact( 'tweetV', 'tweetR', 'tweetJ'));
    }

    public function overview_games() {
        $games = \App\Game::all();

        $gamesFromApi = new GiantBombApi();
        $gamesArray = $gamesFromApi->getAllGames();
        
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();
        return view('pages.overview_games', compact('games', 'tweetV', 'tweetR', 'tweetJ', 'gamesArray'));
    }

    public function info_game() {
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();
        $games = new GiantBombApi();
        $gamesArray = $games->getAllGameInfoById(34402);
        return view('pages.info_game', compact('tweetV', 'tweetR', 'tweetJ', 'gamesArray'));
    }

    public function test() {
        $games = new GiantBombApi();
        $gamesArray = $games->getAllGameInfoById(46090);
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();

        return view('pages.giantbomb_api', compact('gamesArray', 'tweetV', 'tweetR', 'tweetJ'));
    }

}
