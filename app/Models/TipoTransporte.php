<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTransporte extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'tipos_transporte';

     //Definiendo los campos de la tabla
     protected $fillable = [
         'tipo_transporte'
        ];
}
