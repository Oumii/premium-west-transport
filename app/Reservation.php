<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'prestation',
        'addressdepart',
        'addressdestin',
        'date',
        'heure',
        'passagers',
        'bagages',
        'promo',
        'nomfacture',
        'sex',
        'nom',
        'prenom',
        'phone',
        'email',
        'comment',
        'gamme',
        'prix'
    ] ;
}
