<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{

    // Enable when Insert  Tinker dump

    protected $fillable = ['title','content','user_id'];
    public $table = 'post_models';
    public $timestamps = false;




    public function User(){


        //return $this->hasMany('App\User','id');
         return $this->belongsTo(User::class);
    }


}
