<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GameCreateRequest;
use App\Game;
use App;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CustomClasses\GiantBomb\Api as GiantBombApi;
use Illuminate\Support\Facades\Storage;
use Auth;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        if(Auth::user()->role == 'admin'){

            $allGames = \App\Game::all();

            return view('game.main', compact('allGames'));
        }

        else{
                return view('errors.unauthorized');
            }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        if(Auth::user()->role == 'admin'){

            $games = new GiantBombApi();

            $gamesArray = $games->getAllGameIds();
            $dbGames = \App\Game::all();

            $pluckIdFromApi = array_pluck($gamesArray, 'id');
            $pluckIdFromDb  = array_pluck($dbGames, 'id');

            $results = array_diff($pluckIdFromApi , $pluckIdFromDb);

            $gameNames=[];

            foreach($results as $result){

                array_push($gameNames,$games->getGameNameFromApi($result));
            }

            return view('game.create', compact('gameNames'));
        }

    else{
            return view('errors.unauthorized');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     *
     * @param \App\Http\Requests\GameCreateRequest $request
     *
     * GameCreateRequest -> Validator
     *
     * Usage of GiantBombApi to get the name
     */
    public function store(GameCreateRequest $request, Game $game) {

            $games = new GiantBombApi();

            $game->id                     = $request->input('id');
            $game->game_name              = $games->getGameNameFromApi($request->input('id'))['name'];
//        if($request->hasFile('game_background_video')){
//            $game->game_background_video  = $request->file('game_background_video')->getClientOriginalName();
////            dd($request->file('game_background_video')->getFilename());
//            $fileNew = $request->file('game_background_video')->getFilename();
//            $fileOld = $request->file('game_background_video')->getClientOriginalName();
//            Storage::disk('local')->put($fileOld, $fileNew);
//
//        }
            $game->game_background_video  = $request->input('game_background_video');
//        dd($game->game_background_video);
            $game->game_background_img    = $request->input('game_background_img');
            $game->custom_payment_link    = $request->input('custom_payment_link');
            $game->steam_payment_link     = $request->input('steam_payment_link');
            $game->ios_payment_link       = $request->input('ios_payment_link');
            $game->psn_payment_link       = $request->input('psn_payment_link');
            $game->android_payment_link   = $request->input('android_payment_link');

            $game->save();

            return redirect('/admin/games')->with('message', 'Successfully created a new game');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        if(Auth::user()->role == 'admin'){

            $game = \App\Game::where('id', $id)->first();
            return view('game.edit', compact('game'));
        }

        else{
            return view('errors.unauthorized');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $request = json_decode($request->input, true);

        $game = \App\Game::find($request['game_id']);

        $game->game_background_img = $request['game_background_img'];
        $game->game_background_video = $request['game_background_video'];
        $game->custom_payment_link = $request['custom_payment_link'];
        $game->steam_payment_link = $request['steam_payment_link'];
        $game->ios_payment_link = $request['ios_payment_link'];
        $game->psn_payment_link = $request['psn_payment_link'];
        $game->android_payment_link = $request['android_payment_link'];

        $game->save();

        echo true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $game = \App\Game::where('id', $id)->first();

        $game->delete();
    }
}
