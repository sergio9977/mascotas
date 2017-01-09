<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tamano extends Model
{
     protected $table = 'tamano';

    protected $primaryKey = 'Id_Tamano';

    protected $fillable = ['Tamano'];
}
