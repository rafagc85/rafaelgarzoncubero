<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    public function herramientas()
    {
    	return $this->hasMany(herramienta::class);
    }

    public function eventos_tipo()
    {
    	return $this->belongsTo(eventos_tipo::class);
    }

    public function organismo()
    {
    	return $this->belongsTo(organismo::class,'id');
    }
}
