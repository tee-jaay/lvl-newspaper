<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    protected $fillable = ['author_id', 'category_id', 'title', 'dropcap', 'top_d_block', 'mid_text', 'bottom_d_block', 'right_list', 'bottom_text'];
}
