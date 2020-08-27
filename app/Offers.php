<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $fillable =[
    "title",
    "description",
    "image",
    "price",
    "starts",
    "ends",
    ];
}
