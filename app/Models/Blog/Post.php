<?php

namespace App\Models\Blog;

use App\Models\Blog\PostView;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function image(){
        return $this->hasOne(PostImage::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
