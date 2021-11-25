<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class organismo extends Model
{

	public function evento()
    {
    	return $this->hasMany(evento::class,'id_organismo');
    }

    
}
