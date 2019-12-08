<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\category;
use Auth;

class PostController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){

        $this->validate($request,[
       'title' => 'required',
       'description' => 'required'


    ]);

    $post = new Post();

    $post->title = $request->input('title');
    $post->description =$request->input('description');
    $post->category_id =$request->input('category_id');
    $post->user_id =Auth::id();
    $post->save();
    return redirect('/home');
    }


    public function category($id){
         $category= Category::find($id);
         return view('category',compact('category'));
    }
}