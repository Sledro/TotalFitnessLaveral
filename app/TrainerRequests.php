<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainerRequests extends Model
{
    public function client() {
        return $this->hasOne('App\User', 'id', 'clientID');
    }
}
