<?php

namespace App\Http\Controllers;

use App\Game;
use App\Sessie;
use App\Sponser;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //
    public function index(){
        $sessies=Sessie::all();
        $games=Game::all();
        $sponsers=Sponser::all();
        return view('layouts/adminHome',['sessies'=>$sessies,'games'=>$games,'sponsers'=>$sponsers]);
    }
}
