<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    public function user()
    {
    return $this->belongsTo(Category::class);
    }
    public function menuses()
    {
    return $this->hasMany(Category::class);
    }
}
