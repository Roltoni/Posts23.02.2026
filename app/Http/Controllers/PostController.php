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
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
        return "<a href='/get/posts'>All</a>";
    }
    public function show($id){
        $post = Post::find($id); 
        
        return view('posts.show', ['post' => $post])."<div>"."<a href='/get/posts'>Back</a>"."</div>";
    }

    public function index(){
    $posts = Post::all();
    return view('posts.index', ['posts' => $posts]);
    }
    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit', ['singlePost' => $post]);
    }
    public function update(Request $request, $id){
        $post = Post::find($id);
        $post ->update([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]) ;
        
        return "update Sucsefull";
    }
    public function destroy($id){
        $post = Post::find($id);
        $post ->delete() ;
        return "Post with id". $post->id. "deleted".
        "<a href='/get/posts'>index</a>";

    }
}