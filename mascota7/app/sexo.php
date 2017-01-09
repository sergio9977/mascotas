<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sexo extends Model
{
     protected $table = 'sexo';

    protected $primaryKey = 'Id_Sexo';

    protected $fillable = ['Sexo'];
}
