<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $films = Post::where('type', 'film')->get();

        return view('admin.posts.index', compact('films'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'genre' => 'required|string|max:255',
        'authors' => 'required|string|max:255',
        'type' => 'required|string|in:film,post',
    ]);

    Post::create($validated);

    return redirect()->route('admin.posts.index')->with('success', 'Post creato con successo!');
}


    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.posts.index');

    }
}
