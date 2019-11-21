<?php

namespace App\Http\Controllers;

use App\Game;
use App\Sessie;
use App\Sponser;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $sessie=Sessie::all();
        $game=Game::all();
        $sponsers=Sponser::all();
        return view('layouts/adminHome',['sessie'=>$sessie,'game'=>$game,'sponsers'=>$sponsers]);
    }
}
