<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExercisePlan extends Model
{
    public function exercises()
    {
        return $this->hasMany('App\ExercisePlanDetails', 'planID');
    }
}
