<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'users_ramadhan';
    protected $fillable = [
        'id', 'name', 'no_hp', 'email', 'password', 'created_at', 'updated_at'
    ];

    public function Showrooms () 
    {
        return $this->hasMany('App\Models\Showrooms');
    }
}
