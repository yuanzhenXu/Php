<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function user(){
        return $this->belongsTo('App/User');
    }
    public function account(){
        return $this->hasMany('App/Account_flow');
        return $this->hasMany('App/Flow');
    }

    //
}
