<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyExercisePlan extends Model
{
    protected $table = 'my_exercise_plans';

    public function exercises()
    {
        return $this->hasMany('App\ExercisePlan', 'planID');
    }
}
