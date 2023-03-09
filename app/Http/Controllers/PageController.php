<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // => Home
    public function home(Request $request){
        $search = $request->search;
        // $posts = Post::get();
        $posts = Post::where('title', 'LIKE', "%{$search}%")->latest()->paginate(5);
        return view('home', ['posts' => $posts]);
    }

    // => Post
    public function post(Post $post){
        return view('post', ['post' => $post]);
    }
}
