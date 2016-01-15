<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CustomClasses\GiantBomb\Api as GiantBombApi;
use Illuminate\Support\Facades\DB;
use Auth;

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

    //SHOP
    public function create() {
        if(Auth::check()) {

            if (Auth::user()->role == 'admin') {

                $item = '';
                return view('shop.create', compact('item'));
            }
        }
    else{
            return view('errors.unauthorized');
        }
    }

    //UNSUB

    public function unsub($id) {

        $user =  \App\User::where('id', $id)->first();

        return view('pages.unsub', compact('user'));
    }

    public function unsubConfirm($id){

        $user = \App\User::find( $id );
        $user->newsletter = 0;
        $user->save();

        \Session::flash('flash_message', 'You are no longer recieving newletters from Vlambeer.');
        return redirect('/');
    }
}
