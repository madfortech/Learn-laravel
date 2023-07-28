<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate the request...
 
        $posts = new Post();
 
        $posts->title = $request->title;
        $posts->description = $request->description;
 
        $posts->save();
 
        return redirect('/posts');
    }

    public function show(string $id)
    {
        
        return view('posts.show', [
            'post' => Post::findOrFail($id)
        ]);
    }

    public function edit(string $id)
    {
        return view('posts.edit', [
            'post' => Post::findOrFail($id)
        ]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        // Update the user...
        $post = Post::findOrFail($id);
       
        $post->title = $request->title;
        $post->description = $request->description;
 
        $post->save();

        return redirect('/posts');
    }

    
    public function destroy(string $id): RedirectResponse
    {
        // Update the user...
        $post = Post::findOrFail($id);
        
        $post->delete();


        return redirect('/posts');
    }
    
}
