<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account_flow extends Model
{
    //
    public function account_flow(){
        return $this->belongsTo('App/Account');
        return $this->belongsTo('App/Flow');
    }
}
