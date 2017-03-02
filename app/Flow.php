<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flow extends Model
{
    //
    public function flowable(){
        return $this->belongsTo('App/Account');
        return $this->hasMany('App/Account_flow');
        return $this->morphTo('flowable');
    }
}
