<?php

namespace App\Http\Controllers;

use App\Sessie;
use Illuminate\Http\Request;

class SessieController extends Controller
{
    public function editPost(Request $request,$id)
    {
        $validatieData=$request->validate([
            'title'=>'required|max:30|min:3',
            'photo'=>'required',
            'desc1'=>'required|max:50|min:3',
            'desc2'=>'required|max:255|min:3',
            'places'=>'required|max:255|min:1',]);
        $input = $request->only(['title', 'photo','desc1','desc2','places']);
        $post = Sessie::find($id);
        $post->title=$input['title'];
        $post->photo=$input['photo'];
        $post->desc1=$input['desc1'];
        $post->desc2=$input['desc2'];
        $post->places=$input['places'];
        $post->save();
        return redirect()->route('admin_home');
    }
    public function createPost(Request $request)
    {
        $validatieData=$request->validate([
            'title'=>'required|max:30|min:3',
            'photo'=>'required',
                'desc1'=>'required|max:50|min:3',
                'desc2'=>'required|max:255|min:3',
                'places'=>'required|max:255|min:1',]);
        $Sessie = Sessie::create(['title' => $request->input('title'),'photo' => $request->input('photo')
            ,'desc1' => $request->input('desc1'),'desc2' => $request->input('desc2'),'places' => $request->input('places')]);
        return redirect()->route('admin_home');
    }
    public function create(){
            return view('Admin/createSessie');
    }

    public function edit(){
        return view('Admin/editSessie');
    }
    public function details($id)
    {
        $sessie = Sessie::find($id);
        return view('content/detailsSessies',["sessie"=>$sessie]);
    }

    public function delete($id)
    {
        $deletedRows = Sessie::where('id', $id)->delete();
        return view('admin');
    }
}
