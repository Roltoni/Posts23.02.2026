<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function create(){
        return view('posts.forms');
    }
    public function store(Request $request){
       Post::create(['title' => $request->input('title'),'content' => $request->input('content')]);
        return "<a href='/posts'>All</a>";
    }
    public function show($id){
        $post = Post::findOrFail($id); 
        return view('posts.show', ['post' => $post]); 
    }

    public function index(){
    $posts = Post::all();
    return view('posts.posted', ['posts' => $posts]);
    }
}