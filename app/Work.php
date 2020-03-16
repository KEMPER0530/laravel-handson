<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    protected $table = 'work';
    protected $fillable = ['work_id','title','comment','img','url','ref','updated_at'];
}
