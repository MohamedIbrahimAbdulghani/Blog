<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts');
});

Route::get('post/{title}', function($title) {
    return view('post', [
        'title' => $title
    ]);
});