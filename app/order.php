<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{



    public function User(){


        //return $this->hasMany('App\User','id');
        return $this->belongsTo(User::class);
    }

}
