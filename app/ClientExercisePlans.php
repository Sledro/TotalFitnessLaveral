<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientExercisePlans extends Model
{
    protected $table = 'client_exercise_plans';

    protected $fillable = [
        'exercisePlanID',
    ];

}
