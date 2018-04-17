<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ExercisePlanDetails extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'planID', 'day', 'exerciseID', 'reps', 'sets', 'weight', 'priority',
    ];


    public function exercise()
    {
        return $this->hasMany('App\Exercise', 'id', 'exerciseID');
    }
}
