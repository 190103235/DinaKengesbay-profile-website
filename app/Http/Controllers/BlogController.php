<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class BlogController extends Controller
{
    public function index() {
        $posts = post::all();
        return view('index')->with(['posts' => $posts]);
    }

    public function store(Request $request) {
        Post::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email
        ]);
        return back();
    }

    public function get_post($id) {
        $post = Post::find($id);

        if($post==null) 
            return response(['message'=>'post not found'], 404);
        return view('detail')->with(['post'=>$post]);
     }
}