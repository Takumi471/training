<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function user()
    {
    return $this->belongsTo(Category::class);
    }
    public function tags()   
    {
    return $this->hasMany(Post::class);  
    }
    public function comments()   
    {
    return $this->hasMany(Post::class);  
    }
}
