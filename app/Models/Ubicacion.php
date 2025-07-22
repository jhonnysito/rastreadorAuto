<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
   // Para permitir asignación masiva de latitud y longitud
    protected $fillable = ['latitud', 'longitud'];
}
