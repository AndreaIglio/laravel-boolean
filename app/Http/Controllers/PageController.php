<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;



class PageController extends Controller
{
    

    public function index(Post $post)
    {
        // var_dump($post);

        $posts = Post::all();
        // dd($posts);
        return view('home', compact($posts));
    }


}
