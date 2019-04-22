<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminMediaController extends Controller
{
    public function index(){
        $data = Image::all();
        return view('admin.media.index',compact('data'));
    }

    public function create(){
        return view('admin.media.create');
    }

    public function store(Request $request){

        $file = $request->file('file');
        $name = time().$file->getClientOriginalName();
        $file->move('images',$name);
        Image::create(['file' => $name]);
    }

    public function destroy($id){
        $image = Image::findOrFail($id);
        unlink(public_path().$image->file);
        $image->delete();
        return redirect('/admin/media')->with('success',' Image deleted successfully');
    }
}
