<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos_Alumnos extends Model
{
    use HasFactory;
    protected $table='tb_alumno_grupo';
    protected $primaryKey='id_alumno_grupo';
    protected $fillable=[
        'id_grupos',
        'id_alumno',
        'cuatrimestre'
    ];
}
