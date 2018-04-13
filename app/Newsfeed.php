<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsfeed extends Model
{
    protected $table = 'newsfeed';

    public function users() {
        return $this->belongsTo('App\User', 'userID', 'id');
    }
}
