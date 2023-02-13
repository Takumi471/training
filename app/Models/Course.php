<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'course_name',
    'sum_spent_time',
    ];
    
    public function user()
    {
    return $this->belongsTo(Category::class);
    }
    public function menuses()
    {
    return $this->hasMany(Category::class);
    }
}
