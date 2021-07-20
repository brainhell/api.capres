<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cedula',
        'correo',
        'unidad',
        'telf_oficina',
        'telf_habitacion',
        'region',
        'cargo',
        'grado',
        'sueldo',
        'banco',
        'cuenta',
        'porcentaje',
        'procesado',
        'fecha',
        'capres_procesado',
        'capres_user',
        'capres_fecha',
    ];

    protected $hidden = [
        'capres_procesado',
        'capres_user',
        'capres_fecha',
        'procesado'
    ];
}
