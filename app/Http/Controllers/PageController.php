<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // => Home
    public function home(){
        return view('home');
    }

    // => Blog
    public function blog(){
        // $posts = Post::get();
        $posts = Post::latest()->paginate();
        return view('blog', ['posts' => $posts]);
    }

    // => Post
    public function post(Post $post){
        return view('post', ['post' => $post]);
    }
}
