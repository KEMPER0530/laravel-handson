<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tmpuserinfo extends Model
{
    //
    protected $table = 'tmpuserinfo';
    protected $fillable = ['email', 'password', 'name', 'token', 'expired', 'updated_at'];
    const CREATED_AT = null;
}
