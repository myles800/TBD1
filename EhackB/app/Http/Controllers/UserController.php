<?php

namespace App\Http\Controllers;

use App\Game;
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
        return view('Content/profiel');
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

}
