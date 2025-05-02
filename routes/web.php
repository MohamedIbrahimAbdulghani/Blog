<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts');
});

Route::get('post/{title?}', function($title = null) {
    return view('post', [
        'title' => $title
    ]);
})->whereAlpha('title');
// })->whereAlphaNumeric('title');
// })->where('title', '[A-z]+');