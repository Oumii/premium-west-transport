<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    protected $fillable = [
        'direction',
        'prixconfort',
        'prixvan'
        ] ;
}
