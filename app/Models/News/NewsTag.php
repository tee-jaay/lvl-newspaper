<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class NewsTag extends Model
{
    protected $fillable = ['name', 'slug', 'status', 'description'];
}
