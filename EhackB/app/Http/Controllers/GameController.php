<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    //
    public function editPost(Request $request,$id)
    {
        $validatieData=$request->validate([
            'name'=>'required|max:30|min:3',
            'photo'=>'required',
            'date'=>'required|date',
            'location'=>'required|max:255|min:1',]);
        $input = $request->only(['name', 'photo','date','location']);
        $post = Game::find($id);
        $post->name=$input['name'];
        $post->photo=$input['photo'];
        $post->date=$input['date'];
        $post->location=$input['location'];
        $post->save();
        return redirect()->route('admin_home');
    }
    public function createPost(Request $request)
    {
        $validatieData=$request->validate([
            'name'=>'required|max:30|min:3',
            'photo'=>'required',
            'date'=>'required|date',
            'location'=>'required|max:255|min:1',]);
        $Sessie = Game::create(['name' => $request->input('name'),'photo' => $request->input('photo')
            ,'date' => $request->input('date'),'location' => $request->input('location')]);
        return redirect()->route('admin_home');
    }
    public function create(){
        return view('Admin/createGame');
    }

    public function edit(){
        return view('Admin/editGame');
    }
    public function details($id)
    {
        $game = Game::find($id);
        return view('content/detailsGames',["game"=>$game]);
    }

    public function delete($id)
    {
        $deletedRows = Game::where('id', $id)->delete();
        return view('admin');
    }
}
