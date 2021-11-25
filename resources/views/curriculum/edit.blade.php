@extends('layouts.base')

@section('title')Agregar nuevo evento al Curriculum @endsection


@section('contenido')
<h1>Editar evento {{ $editar_evento->id }}</h1>
 <div class="row">
    <div class="col">
    	
    	<form action="/curriculum/{{ $editar_evento->id}}" method="POST">
            @csrf 
            @method('put')
    		<div class="form-group">
    			<label for="Tipo_evento">Tipo de evento:</label>
    			<input type="text" class="form-control" id="id_tipo_evento" name="id_tipo_evento" placeholder="id del tipo de evento">

    			<label for="nombre">Nombre del evento:</label>
    			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del evento">

    			<label for="descripcion_corta">Descripción del evento:</label>
    			<textarea rows="4" cols="50" class="form-control" id="descripcion_corta" name="descripcion_corta" >
    				Descripción corta del evento
    			</textarea>

    		</div>
    		<button class="btn btn-primary" type="submit">Guardar</button>
    	</form>

    </div>
  </div> 
   <a class="btn btn-secondary" href="/curriculum">Atras</a>
@endsection