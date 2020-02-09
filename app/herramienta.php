<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class herramienta extends Model
{
	public function herramientas()
    {
    	
    	 return $this->belongsTo(evento::class);


    }

    public function tecnologia()
     {
          return $this->belongsTo(tecnologia::class,'id');
     }


}
