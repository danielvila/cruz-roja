<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $fillable = ['vehiculo', 'fecha', 'hr_llamada', 'km_salida',
                           'km_llegada', 'hr_salida', 'hr_llegada', 'hr_hospital', 
                           'conductor', 'socorrista'];
}
