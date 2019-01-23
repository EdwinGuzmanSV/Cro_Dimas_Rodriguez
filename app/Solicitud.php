<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $fillable = [
        'nombres', 'apellidos', 'telefono','direccion', 'ocupacion', 'email', 'motivo_socio'
    ];
}
