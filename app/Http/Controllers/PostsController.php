<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $posts = Post::all();
        $users = User::all();
        return view('posts', compact('posts', 'users'));
    }

    public function create() {
        return view('post.create_post');
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view('post', compact('post'));
    }

    public function store(Request $request) {
        // 1 - make validation about myData
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'image' => 'required|file'
        ]);

        // 1- get file name
        $fileName = $request->file('image')->getClientOriginalName();
        // 2- save file
        $fileLocation = $request->file('image')->move(public_path('images'), $fileName);

        // 2 - Store - Save Data In DataBase
        $posts = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $fileName,
            'user_id' => Auth::user()->id // to take user_id from user and create this user_id in posts table to use it in relationship between users table and posts table if this user can make authenticate in website
        ]);
        // 3 - Return User Back
        // return redirect('/');
        return back()->with('success', 'Add Post Successful ');
    }
    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('post.edit_post', compact('post'));
    }
    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);
        // 1 - make validation about myData
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required'
        ]);
        // 2 - Updated Data Inside DataBase
        $post->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        // 3 - Return User Back
        // return redirect('/');
        return back()->with('success', 'Updated ');
    }
    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return back()->with('success', 'Deleted');
    }
}