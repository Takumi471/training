<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'record_date',
    'body_weight',
    'time_spent',
    ];
    public function user()
    {
    return $this->belongsTo(Category::class);
    }
}
