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
        $input = request()->only(['tittle', 'description']);
        $post1 = Boek::find($id);
        $post1->tittle=$input['tittle'];
        $post1->description=$input['description'];
        $post1->save();
        return redirect('admin');
    }
    public function createPost(Request $request)
    {
        $validatieData=$request->validate([
            'tittle'=>'required|max:30|min:3',
            'description'=>'required|max:30|min:3']);
        $Boek = Boek::create(['tittle' => $request->input('tittle'),'description' => $request->input('description')]);
        return redirect('admin');
    }
    public function details($id)
    {
        $sessie = Sessie::find($id);
        return view('content/detailsContent',["sessie"=>$sessie]);
    }
    public function admina(Request $request)
    {
        return view('admin/index');
    }
    public function delete($id)
    {
        $deletedRows = Boek::where('id', $id)->delete();
        return view('admin/index');
    }
}
