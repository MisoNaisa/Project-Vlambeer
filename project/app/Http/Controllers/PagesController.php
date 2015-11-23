<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function index() {
        $games = \App\Game::all();
        return view('pages.index', compact('games'));
    }

    public function contact() {
        return view('pages.contact');
    }

    public function overview_games() {
        return view('pages.overview_games');
    }

    public function info_game() {
        return view('pages.info_game');
    }
}
