<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() { 
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function store() { 
        
    }

    public function createFakeData() {
        $posts = Post::factory(100)->create();
        return view('posts.index')->with('posts', $posts);
    }
}
