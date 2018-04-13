<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientExercisePlans extends Model
{
    protected $table = 'client_exercise_plans';

    public function exercises()
    {
        return $this->hasMany('App\ExercisePlan', 'planID');
    }
}
