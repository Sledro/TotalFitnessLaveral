<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainerExercisePlanManager extends Model
{
    public function exercise()
    {
        return $this->hasMany('App\ExercisePlan', 'id');
    }
}
