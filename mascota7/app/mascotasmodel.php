<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mascotasmodel extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
     'Nombre','Edad', 'tamano','Sexo','Dueno','Estado','Descripcion','Foto',
 ];
}
