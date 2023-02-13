<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'title',
    'spent_time'
    ];
    public function courses()
    {
    return $this->belongsTo(Category::class);
    }
}
