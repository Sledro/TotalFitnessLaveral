<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExercisePlan extends Model
{

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'trainerID', 'name',
    ];

    public function exercises()
    {
        return $this->hasMany('App\ExercisePlanDetails', 'planID');
    }
}
