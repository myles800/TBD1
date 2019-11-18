<?php

namespace App\Http\Controllers;

use App\Sponser;
use Illuminate\Http\Request;

class SponserController extends Controller
{
    //
    public function index(){
       $sponser= Sponser::all();
        return view('Admin/editSponser',['sponser'=>$sponser]);
    }
    public function changeTier(Request $request){
        $sponser= Sponser::all();
        foreach ($sponser as $item){
            $name=$item->name;
            $post=Sponser::find($item->id);
            $post->tier=$request->$name;
            $post->save();
        }
        return redirect()->back();
    }
}

