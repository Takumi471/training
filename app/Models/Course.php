<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Menu;

class Course extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'course_name',
    'sum_spent_time',
    ];
    
    public function user()
    {
    return $this->belongsTo(User::class);
    }
    public function menuses()
    {
    return $this->hasMany(Menu::class);
    }
}
