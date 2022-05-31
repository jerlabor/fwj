<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'frequency',
        'start_date',
        'end_date'
    ];

    //Relationships

    public function workouts(){
        $this->hasMany(Workout::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
