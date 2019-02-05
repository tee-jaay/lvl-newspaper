<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Model;

class Cloudinary extends Model
{
    protected $fillable = ['cloud_name', 'api_key', 'api_secret', 'media_url'];
}
