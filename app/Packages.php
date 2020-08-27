<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $fillable = [
"title","note","destinations","highlights","image","where_stay","travel_style","age_range","number_of_days","price","what_included","type","category",

    ];
}
