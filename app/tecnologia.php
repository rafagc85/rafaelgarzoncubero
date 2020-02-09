<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tecnologia extends Model
{
    public function herramientas()
    {
    	return $this->hasMany(herramienta::class,'id');
    }
}
