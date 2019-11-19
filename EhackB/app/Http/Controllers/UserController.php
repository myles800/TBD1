<?php

namespace App\Http\Controllers;

use App\Game;
use App\Sessie;
use App\sessie_user;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sponser=\App\Sponser::all();
        $sessie=\App\Sessie::all();
        $game=\App\Game::all();
        return view('Content/profiel',["sponser"=>$sponser,"sessie"=>$sessie,"game"=>$game]);
    }

    public function changePassword(Request $request){
        if(!(Hash::check($request->input('currentPassword'),Auth::user()->getAuthPassword()))){
            return redirect()->back()->with("error","Je huidig passwoord komt niet overeen met je paswoord!");
        }
        if(Hash::check($request->input('newPassword'),Auth::user()->getAuthPassword())){
            return redirect()->back()->with("error","Paswoorden mogen niet hetzelfde zijn!");
        }
        if(!($request->input('newPassword')==$request->input('repeatNewPassword'))){
            return redirect()->back()->with("error","Nieuwe paswoorden komen niet overeen!");
        }
        $validatieData=$request->validate([
            'currentPassword'=>'required|max:30|min:3',
            'newPassword'=>'required|max:30|min:3',]);
        $newUser=Auth::user();
        $newUser->update(['password'=>Hash::make($request->input('newPassword'))]);
        return redirect()->back()->with("success","Paswoord is veranderd!");
    }
    public function changeProfiel(Request $request){
        $validatieData=$request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',]);
        $newUser=Auth::user();
        $newUser->update(['name'=>$request->input('name'),'email'=>$request->input('email')]);

        return redirect()->back()->with("success","profiel gewijzigd!");
    }
    public function addSessie(Request $request,$id)
    {
        $userId=$request->user()->id;
        $post1=Sessie::find($id);
        $post1->places=$post1->places-1;
        $post1->save();
        $post2 = sessie_user::create(['sessie_id' => $id,'user_id' => $userId]);

        return redirect()->route('profiel');
    }
    public function addGame(Request $request,$id)
    {
        $post=Auth::user();
        $post->game_id=$id;
        $post->save();
        return redirect()->route('profiel');
    }
}
