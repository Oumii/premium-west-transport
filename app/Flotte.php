<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flotte extends Model
{
    protected $fillable = [
        'type',
        'name',
        'details',
        'services',
        'persons',
        'bags',
        'image',
        'alt'
        ] ;
}
