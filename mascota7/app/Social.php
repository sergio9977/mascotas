<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
     protected $table = 'social';
    protected $fillable = ['provider_id','provider'];


    function user()
    {
        return $this->belongsTo(User::class);
    }
}
