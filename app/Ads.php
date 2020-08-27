<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $fillable = [
    "ad_name","description","country","price","location","rating", "link","image","starts","ends"
    ];
    //
}
