<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

    public function users() // Plural Name
    {
        return $this->belongsToMany(User::class, 'user_role');
    }
}

