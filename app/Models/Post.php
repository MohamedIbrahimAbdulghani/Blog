<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    // this function to know what the user added this post ( get data about user by post )
    public function user() {
        return $this->belongsTo(User::class);
    }
}
