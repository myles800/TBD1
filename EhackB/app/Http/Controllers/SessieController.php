<?php

namespace App\Http\Controllers;

use App\Sessie;
use Illuminate\Http\Request;

class SessieController extends Controller
{
    public function editPost(Request $request,$id)
    {
        $validatieData=$request->validate([
            'tittle'=>'required|max:30|min:3',
            'description'=>'required|max:30|min:3']);
        $input = $request->only(['tittle', 'description']);
        $post1 = Sessie::find($id);
        $post1->tittle=$input['tittle'];
        $post1->description=$input['description'];
        $post1->save();
        return redirect('admin');
    }
    public function createPost(Request $request)
    {
        $validatieData=$request->validate([
            'title'=>'required|max:30|min:3',
            'photo'=>'required',
                'desc1'=>'required|max:50|min:3',
                'desc2'=>'required|max:255|min:3',
                'places'=>'required|max:255|min:3',]);
        $Sessie = Sessie::create(['title' => $request->input('title'),'photo' => $request->input('photo')
            ,'desc1' => $request->input('desc1'),'desc2' => $request->input('desc2'),'places' => $request->input('places')]);
        return redirect('admin');
    }
    public function create(){
            return view('Admin/createSessie');
    }

    public function edit($id){
        $sessie=Sessie::find($id);
        return view('Admin/editSessie',["sessie"=>$sessie]);
    }
    public function details($id)
    {
        $sessie = Sessie::find($id);
        return view('content/details',["sessie"=>$sessie]);
    }

    public function delete($id)
    {
        $deletedRows = Sessie::where('id', $id)->delete();
        return view('admin');
    }
}
