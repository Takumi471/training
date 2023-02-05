<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tra_user extends Model
{
    use HasFactory;
    
    public function statistics()   
    {
    return $this->hasOne(Post::class);  
    }
    public function posts()   
    {
    return $this->hasMany(Post::class);  
    }
    public function courses()   
    {
    return $this->hasMany(Post::class);  
    }
}
