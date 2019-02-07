<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    public function article(){
        return $this->belongsTo(NewsArticle::class);
    }

    public function commenter(){
        return $this->belongsTo(User::class);
    }
}
