<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLogin(){
        return view('auth.admin_login');

    }
    public function login(Request $request){
        $validatieData=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6']);
        if(Auth::guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$request->filled('remember'))){
            return redirect()->route('admin');
        }
        return redirect()->back()->with($request->only('email','remember'));

    }
}
