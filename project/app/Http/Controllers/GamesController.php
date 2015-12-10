<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CustomClasses\GiantBomb\Api as GiantBombApi;
use DB;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allGames = \App\Game::all();
        return view('game.main', compact('allGames') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();

        $games = new GiantBombApi();
        $gamesArray = $games->getAllGameIds();
        $dbGames = \App\Game::all();

        $pluckIdFromApi = array_pluck($gamesArray, 'id');
        $pluckIdFromDb  = array_pluck($dbGames, 'id');

        $results = array_diff($pluckIdFromApi , $pluckIdFromDb);

        $results = [1,2,3,4];
        foreach($results as $result){
            $gameNames = $games->getGameNameFromApi($result);
        }

        return view('game.create', compact('gameNames', 'tweetV', 'tweetR', 'tweetJ'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tweetV = \App\Tweet::getStatusVlambeer();
        $tweetR = \App\Tweet::getStatusRami();
        $tweetJ = \App\Tweet::getStatusJan();
        $game = \App\Game::where('id', $id)->first();

        return view('game.edit', compact('game','tweetV', 'tweetR', 'tweetJ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'game_background_video' => 'string',
            'game_background_img' => 'required|string',
            'custom_payment_link' => 'string',
            'steam_payment_link' => 'string',
            'ios_payment_link' => 'string',
            'psn_payment_link' => 'string',
            'android_payment_link' => 'string'
        ]);

        $game = \App\Game::find($request['game_id']);
        $game->game_background_img = $request['game_background_img'];
        $game->game_background_video = $request['game_background_video'];
        $game->custom_payment_link = $request['custom_payment_link'];
        $game->steam_payment_link = $request['steam_payment_link'];
        $game->ios_payment_link = $request['ios_payment_link'];
        $game->psn_payment_link = $request['psn_payment_link'];
        $game->android_payment_link = $request['android_payment_link'];
        $game->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = \App\Game::where('id', $id)->first();
        $game->delete();
    }

    public function test() {
        $games = new GiantBombApi();
        $gamesArray = $games->getAllGameIds();
        $dbGames = \App\Game::all();

        $pluckIdFromApi = array_pluck($gamesArray, 'name');
        $pluckIdFromDb  = array_pluck($dbGames, 'game_name');

        $result = array_diff($pluckIdFromApi , $pluckIdFromDb);

        dd($pluckIdFromApi,$pluckIdFromDb, $result);

        return view('pages.giantbomb_api', compact('gamesArray'));
    }
}
