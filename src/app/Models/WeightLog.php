<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 
        'weight', 
        'calories', 
        'exercise_time', 
        'exercise_content'
    ];
}
