<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDetail extends Model
{
    use HasFactory;

    // relation

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
