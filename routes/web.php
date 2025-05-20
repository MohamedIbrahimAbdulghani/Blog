<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = User::all();
    return view('posts', compact('users'));
});


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
