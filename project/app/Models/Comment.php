<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded=[

    ];

    function User(){
        return $this->belongsTo(User::class, 'users_id');
    }

    function Post(){
        return $this->belongsTo(Post::class, 'posts_id');
    }
    
    function RespComment(){
        return $this->hasOne(RespComment::class);
    }
}
