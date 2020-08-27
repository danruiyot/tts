<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        "title","venue","description","country","price","location","image","starts","ends"
        ];
}
