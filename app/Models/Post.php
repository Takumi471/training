<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'menu_name',
    'menu_title',
    'menu_body',
    'menu_time_spent',
    'tag_id',
    'user_id'
    ];
    public function user()
    {
    return $this->belongsTo(User::class);
    }
    public function tags()   
    {
    return $this->hasMany(Tag::class);  
    }
    public function comments()   
    {
    return $this->hasMany(Post::class);  
    }
}
