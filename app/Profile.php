<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $table = 'profile';
    protected $fillable = ['id', 'heading','lastdate','history','imageutl','updated_at'];
}
