<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function function_to_returned_user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}