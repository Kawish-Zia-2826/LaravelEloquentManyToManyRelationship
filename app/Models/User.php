<?php
namespace App\Models;

// use App\Models\User;
use App\Models\Role;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamp = false;
    public function roles(){
        return $this->belongsToMany(Role::class, 'user_role');
    }
} 
