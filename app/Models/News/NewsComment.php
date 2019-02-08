<?php

namespace App\Models\News;

use App\User;
use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    public function article(){
        return $this->belongsTo(NewsArticle::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
