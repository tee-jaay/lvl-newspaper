<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $fillable = ['post_id', 'main', 'float_left', 'float_right'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
