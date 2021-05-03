<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'question_types',
        'child_questions',
        'order',
        'points',
        'answers',
        'choices'
    ];
}
