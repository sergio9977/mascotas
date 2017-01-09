<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adopcion extends Model
{
     protected $table = 'adopcion';

    protected $primaryKey = 'Id_Adopcion';

    protected $fillable = ['Id_Usuario', 'Id_Mascota'];
}
