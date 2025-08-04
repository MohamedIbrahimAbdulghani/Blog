<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();
        $users = User::all();
        return view('posts', compact('posts', 'users'));
    }

    public function create() {
        return view('create_post');
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view('post', compact('post'));
    }

    public function store(Request $request) {
        // 1 - make validation about myData
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required'
        ]);
        // 2 - Store - Save Data In DataBase
        $posts = Post::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        // 3 - Return User Back
        // return redirect('/');
        return back()->with('success', 'Add Post Successful ');
    }
}