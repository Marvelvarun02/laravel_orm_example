<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // use HasFactory, Notifiable;

    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // public function posts()
    // {
    //     return $this->hasMany(Post::class);
    // }

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }

    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class, 'role_user');
    // }

    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}

