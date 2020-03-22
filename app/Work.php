<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    protected $table = 'work';
    protected $fillable = ['title', 'comment', 'img', 'url', 'ref', 'updated_at'];
    const CREATED_AT = null;
    protected $primaryKey = 'work_id';
}
