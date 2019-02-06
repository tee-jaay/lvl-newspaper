<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class NewsArticleImages extends Model
{
    protected $fillable = ['post_id', 'header', 'right', 'main', 'bottom'];
}
