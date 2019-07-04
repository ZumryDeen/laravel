<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = ['name','email','age'];
    public $table = 'tbl_customer';
    public $timestamps = false;
}
