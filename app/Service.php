<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'image',
        'icon',
        'title',
        'description1',
        'description2',
        'alt',
        ] ;
}
