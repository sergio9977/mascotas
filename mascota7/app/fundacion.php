<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fundacion extends Model
{
     protected $table = 'fundacion';

    protected $primaryKey = 'Id_Fundacion';

    protected $fillable = ['Nombre', 'Id_Usuario', 'Direccion', 'Telefono', 'Descipcion', 'Logo', 'Id_Estado'];
}
