<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
     protected $table = 'evento';

    protected $primaryKey = 'Id_Evento';

    protected $fillable = ['NombreEvento', 'Id_Fundacion', 'Lugar', 'Descripcion', 'Foto'];
}
