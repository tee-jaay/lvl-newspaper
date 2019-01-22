<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
