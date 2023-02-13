<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
    'comment_name',
    'comment_body',
    ];
    public function post()   
    {
    return $this->belongsTo(Category::class);
    }
}
