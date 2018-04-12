<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExercisePlan extends Model
{
    public function exercise()
    {
        return $this->hasMany('App\Exercise', 'id');
    }
}
