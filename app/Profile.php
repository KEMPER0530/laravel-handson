<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $table = 'profile';
    protected $fillable = ['lastdate', 'history', 'updated_at'];
    const CREATED_AT = null;
}
