<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Mailbox extends Model
{
    protected $table = 'mailbox';

    public function sender()
    {
        return $this->hasMany('App\User', 'id', 'senderID');
    }

    public function receiver()
    {
        return $this->hasMany('App\User', 'id', 'receiverID');
    }
}
