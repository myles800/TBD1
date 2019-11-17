<?php

namespace App\Http\Controllers;

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

}
