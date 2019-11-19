<?php

namespace App\Http\Controllers;

use App\Game;
use App\Sessie;
use App\Sponser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showAbout()
    {
        return view('Content/about');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sponser=\App\Sponser::all();
        $sessie=\App\Sessie::all();
        $game=\App\Game::all();
        return view('layouts/home',["sponser"=>$sponser,"sessie"=>$sessie,"game"=>$game]);
    }
    public function detailsSessie($id)
    {
        $sessie = Sessie::find($id);
        return view('content/detailsSessies',["sessie"=>$sessie]);
    }
    public function detailsGame($id)
    {
        $game = Game::find($id);
        return view('content/detailsGames',["game"=>$game]);
    }

}
