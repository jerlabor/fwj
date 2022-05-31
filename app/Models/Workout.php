<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'training_type',
        'muscle_group',
        'week',
        'day',
        'rpe',
        'completed_on',
    ];
}
