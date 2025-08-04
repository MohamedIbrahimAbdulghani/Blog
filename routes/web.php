<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // $users = User::all();
//     // $posts = Post::all();
//     // return view('posts', compact('users'));

//     // $posts = Post::all();
//     // dd($posts);
//     // return view('posts', compact('posts'));
// });


Route::get('/', [PostsController::class, 'index']);
Route::get('posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('posts/store', [PostsController::class, 'store'])->name('posts.store');
Route::get('posts/{id}', [PostsController::class, 'show']);

// Route::get('posts/{title?}', function($title=null) {
//     return view('post', [
//         'title' => $title
//     ]);
// });

Route::get('posts/{title?}', function($title = null) {
    $users = ['Mohamed', 'Ahmed', 'Rana', 'Mahmoud'];
    return view('post', [
        'title' => $title,
        'users' => $users
    ]);
})->where('title', '[a-zA-Z0-9\-]+'); // i used where to stop title when this title have any char ( $@!^&* )

// Route::get('posts/{id}', )
