<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[

    ];

    function User(){
        return $this->belongsTo(User::class, 'users_id');
    }

    function Comment(){
        return $this->hasOne(Comment::class);
    }
}
