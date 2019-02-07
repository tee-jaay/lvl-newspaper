<?php

namespace App\Models\News;

use App\User;
use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    protected $fillable = ['author_id', 'news_category_id', 'title', 'dropcap', 'top_d_block', 'mid_text', 'bottom_d_block', 'right_list', 'bottom_text'];

    public function author(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(NewsCategory::class,'id');
    }

    public function image(){
        return $this->hasOne(NewsArticleImages::class);
    }

    public function tags(){
        return $this->belongsToMany(NewsTag::class);
    }

    public function comments()
    {
        return $this->hasMany(NewsComment::class);
    }
}
