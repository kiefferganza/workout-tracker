<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Workouts extends Model
{
    use HasFactory;

    /**
     * The attributes that should be mutated to date.
     *
     * @var array
     */
    protected $casts = [
        'created_at',
        'updated_at',
    ];

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->diffForHumans();
    }

    public function exercises(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(WorkoutExercise::class);
    }
}
