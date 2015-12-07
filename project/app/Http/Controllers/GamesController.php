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

        return view('game.create', compact('tweetV', 'tweetR', 'tweetJ'));
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
        $game = \App\Game::where('id', $id)->first();

        return view('game.edit', compact('game'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function test() {
        $games = new GiantBombApi();
        $gamesArray = $games->getAllGameIds();
        $dbGames = DB::select("SELECT * FROM games");

        $pluckIdFromApi = array_pluck($gamesArray, 'id');
        $pluckIdFromDb  = array_pluck($dbGames, 'id');

//        dd(var_dump($pluckIdFromApi, $pluckIdFromDb));

        foreach($games as $game){

        }

        //       foreach($games as $game) {
//
//        if (Game::where('id', '=', $games->getAllGameIds())->exists()) {
//            // when exist in database
//            echo 'data already in database';
//        }
//       }

        return view('pages.giantbomb_api', compact('gamesArray'));
    }
}