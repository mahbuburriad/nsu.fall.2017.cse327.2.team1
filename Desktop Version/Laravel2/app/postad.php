<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postad extends Model
{
    protected $table="postad";

    protected $fillable=['location', 'propertytype', 'propertyfor', 'price', 'sqrft', 'bedroom', 'kitchen', 'balcony', 'description']

}
