<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicidad extends Model
{
     protected $table = 'publicidad';

    protected $primaryKey = 'Id_Publicidad';

    protected $fillable = ['Nombre', 'Foto', 'Link', 'Descripcion'];
}
