<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [
    'nombre',
    'especialidad',
    'foto',
    'experiencia',
    'educacion',
    'cmp',
    'descripcion',
];
}
