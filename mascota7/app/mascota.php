<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mascota extends Model
{
    protected $table = 'mascota';

    protected $primaryKey = 'Id_Mascota';

    protected $fillable = ['Nombre', 'Id_Tamano', 'Id_Sexo', 'Edad', 'Foto', 'Descripcion', 'Id_Dueno', 'Id_Estado'];
}
