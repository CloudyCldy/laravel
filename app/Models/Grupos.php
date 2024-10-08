<?php
//Modelo:va de acuerdo a la base de datos

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    use HasFactory;
    protected $table='tb_grupos';
    protected $primaryKey='id_grupos';
    protected $fillable=[
        'clave',
        'nombre',
        'cuatrimestre'
    ];

}
