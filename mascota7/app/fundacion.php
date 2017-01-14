<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fundacion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fundacion';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'Id_Fundacion';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre', 'Descripcion', 'Id_Usuario', 'Direccion', 'Logo', 'Telefono', 'Id_Estado'];

    
}
