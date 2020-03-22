<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crdcardinfo extends Model
{
    //
    protected $table = 'crdcardinfo';
    protected $fillable = ['cardnumber', 'cardname', 'cardmonth', 'cardyear', 'cardcvv', 'updated_at'];
    const CREATED_AT = null;
}
