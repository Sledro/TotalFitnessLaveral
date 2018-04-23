<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailboxMessages extends Model
{
    public function sender()
    {
        return $this->hasMany('App\User', 'id', 'senderID');
    }

}
