<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $posts = Post::all();
        $post = Post::inRandomOrder()->first();
        return view('pages.index', compact('posts', 'post'));
    }

    public function showPost($id){
        $post = Post::findOrFail($id);
        return view('pages.post', compact('post'));
    }
}
