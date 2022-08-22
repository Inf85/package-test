<?php

namespace Mikhail\Posts\Http\Controllers;

use Mikhail\Posts\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        return view('posts::index',[
            'posts' => $posts
        ]);
    }
}
