<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anecdota extends Model
{
    //protected $table = 'anecdotas';
    protected $fillable = ['titulo','descripcion','condicion','imagen'];
}
