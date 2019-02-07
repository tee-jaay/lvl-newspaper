<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $fillable = ['name', 'slug', 'bg_color', 'status', 'description'];

    public function articles(){
        return $this->hasMany(NewsArticle::class);
    }
}
