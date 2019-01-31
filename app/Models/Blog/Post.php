<?php

namespace App\Models\Blog;

use App\Models\Blog\PostView;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['author_id', 'title', 'slug', 'category_id', 'top_text', 'italic', 'mid_text', 'color_quote', 'bottom_text'];

    public function image()
    {
        return $this->hasOne(PostImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
