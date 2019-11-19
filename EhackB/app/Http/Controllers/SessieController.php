<?php

namespace App\Http\Controllers;

use App\Sessie;
use App\Sessie_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

class SessieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
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
            'desc1'=>'required|max:50|min:3',
            'desc2'=>'required|max:255|min:3',
            'places'=>'required|max:255|min:1',]);

        $fileContents = $request->file('photo');

        $fileContents->storeAs('public',$fileContents->getClientOriginalName(),['file'=>$fileContents]);


        $Sessie = Sessie::create(['title' => $request->input('title'),'photo' =>$fileContents->getClientOriginalName()
            ,'desc1' => $request->input('desc1'),'desc2' => $request->input('desc2'),'places' => $request->input('places')]);
        return redirect()->route('admin_home');
    }
    public function create(){
            return view('Admin/createSessie');
    }

    public function edit(){
        return view('Admin/editSessie');
    }


    public function delete($id)
    {
        $deletedRows = Sessie::where('id', $id)->delete();
        return redirect()->route('admin_home');
    }

}
