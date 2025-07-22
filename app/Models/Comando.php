<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comando extends Model
{
    // Para permitir asignación masiva de estos campos
    protected $fillable = ['accion', 'estado'];
}
