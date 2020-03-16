<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logininfo extends Model
{
    //
    protected $table = 'login_info';
    protected $fillable = ['username','password','name','updated_at'];
}
