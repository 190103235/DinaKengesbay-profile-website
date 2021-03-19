<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ApiController extends Controller
{
    //returns all posts rows
    public function index(Request $request) {
        $posts = Post::all();
        return response($posts, 200);
    }

    // returns post with given post_id
    public function get_post(Request $request) {
        $post=Post::find($request->post_id);
        if ($post==null) return response(['message'=>'There is no such post'], 404);
        return response($post, 200);
    }
}
