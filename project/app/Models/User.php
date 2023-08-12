<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded=[

    ];

    function role(){
        return $this->belongsTo(Role::class);
    }

    function information(){
        return $this->hasOne(Information::class);
    }

    function Alert(){
        return $this->hasMany(Alert::class);
    }

    function Post(){
        return $this->hasMany(Post::class);
    }

    function Comment(){
        return $this->hasMany(Comment::class);
    }

    function RespComment(){
        return $this->hasMany(RespComment::class);
    }

    function Refuge(){
        return $this->hasMany(Refuge::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
