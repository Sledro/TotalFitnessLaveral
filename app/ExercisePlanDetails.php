<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExercisePlanDetails extends Model
{
    public function exercise()
    {
        return $this->hasMany('App\Exercise', 'id', 'exerciseID');
    }
}
