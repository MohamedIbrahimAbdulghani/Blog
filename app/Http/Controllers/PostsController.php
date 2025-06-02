<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }
    public function show($id) {
        $post = Post::findOrFail($id);
        $title = $post->title;
        return view('post', compact('post', 'title'));
    }
    public function create() {
        return view('create_post');
    }
        public function store(Request $request) {
        $posts = Post::create([
            'title' => $request->title,
            'image' => $request->image,
            'description' => $request->description
        ]);
        return redirect('/');

    }
}
