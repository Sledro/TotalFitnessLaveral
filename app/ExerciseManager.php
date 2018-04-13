<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseManager extends Model
{
    public function exercise()
    {
        return $this->hasMany('App\ExercisePlan', 'id');
    }
}
