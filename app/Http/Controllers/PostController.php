<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        //dd($posts);
        return view('posts.index',['posts'=>$posts]);
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        Post::query()->create($request->all());
        return redirect()->route("index");
    }
    public function show(Post $post)
    {
        return view('posts.show', ['post'=>$post]);
    }
    public function edit(Post $post)
    {
        return view('posts.edit',['post'=>$post]);
    }
    public function update(Request $request, Post $post)
    {

        $post->update($request->all());
        return redirect()->route("index");
    }
    public function delete(Post $post)
    {

        $post->delete();
        return redirect()->route('index');
    }
}
