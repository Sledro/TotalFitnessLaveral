<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientExercisePlans extends Model
{
    protected $table = 'client_exercise_plans';

    protected $fillable = [
        'exercisePlanID',
    ];

    public function plan(){
        return $this->hasMany('App\ExercisePlan', 'id', 'exercisePlanID');
    }

}
