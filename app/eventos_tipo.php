<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventos_tipo extends Model
{
    public function evento()
    {
    	return $this->hasMany(evento::class);
    }
}
