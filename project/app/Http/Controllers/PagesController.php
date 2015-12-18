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

        $games = \App\Game::all();

//        dd($games);
        return view('pages.index', compact('games'));
    }

    public function contact() {

        return view('pages.contact');
    }

    public function overview_games() {

        $gamesFromApi = new GiantBombApi();

        $gamesArray = $gamesFromApi->getAllGames();

//        dd($gamesArray);

        return view('pages.overview_games', compact('gamesArray'));
    }

    public function info_game($id) {

        $games = new GiantBombApi();

        $gameInfo = $games->getAllGameInfoById($id);
        $gameDesc = preg_replace("/<img[^>]+\>/i", "",str_replace('href="','target="_blank" href="http://giantbomb.com',$gameInfo['description']));
//
        return view('pages.info_game', compact('tweetV', 'tweetR', 'tweetJ', 'gameInfo','gameDesc'));
    }

    public function edit() {

    }

    public function create() {

        $item = '';
        return view('shop.create', compact('item'));
    }
    //SHOP

    public function test() {

        $games = new GiantBombApi();

        $gamesArray = $games->getAllGameInfoById(34402);
        dd($gamesArray);
    }

}
