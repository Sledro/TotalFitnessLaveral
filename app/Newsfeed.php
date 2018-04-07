<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsfeed extends Model
{
    protected $table = 'posts';

    public function users() {
        return $this->belongsTo('App\User', 'userid', 'id');
    }
}
