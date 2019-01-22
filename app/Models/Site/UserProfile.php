<?php

namespace App\Models\Site;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
