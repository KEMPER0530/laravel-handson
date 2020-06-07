<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesslog extends Model
{
    //
    protected $table = 'access_logs';
    const CREATED_AT = null;
}
