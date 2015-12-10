<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CustomClasses\GiantBomb\Api as GiantBombApi;
use Illuminate\Support\Facades\DB;


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
        $gamesFromApi = new GiantBombApi();
        $gamesArray = $gamesFromApi->getAllGames();

//        dd($gamesArray);
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();
        return view('pages.overview_games', compact('tweetV', 'tweetR', 'tweetJ', 'gamesArray'));
    }

    public function info_game($id) {

        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();
        $games = new GiantBombApi();

        $gameInfo = $games->getAllGameInfoById($id);
      $gameDesc = preg_replace("/<img[^>]+\>/i", "",str_replace('href="','target="_blank" href="http://giantbomb.com',$gameInfo['description']));
//
        return view('pages.info_game', compact('tweetV', 'tweetR', 'tweetJ', 'gameInfo','gameDesc'));
    }

    public function edit() {

    }

    public function create() {
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();


        $item = '';
        return view('shop.create', compact( 'tweetV', 'tweetR', 'tweetJ', 'item'));
    }

    public function test() {
        $games = new GiantBombApi();
        $gamesArray = $games->getAllGameInfoById(34402);
        dd($gamesArray);
    }

}
