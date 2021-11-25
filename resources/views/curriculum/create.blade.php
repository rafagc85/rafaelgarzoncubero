@extends('layouts.base')

@section('title')Agregar nuevo evento al Curriculum @endsection


@section('contenido')
<h1>Nuevo evento</h1>

@if($errors->any())
 <div class="row">
    <div class="col">
    	<div class="alert alert-danger">
	    	<ul>
	    		@foreach($errors->all() as $error)
	    		<li>{{ $error }}</li>
	    		@endforeach
	    	</ul>
    </div>
    </div>
</div>
@endif

<br>

 <div class="row">
    <div class="col">
    	
    	<form action="/curriculum" method="POST">
            @csrf 
    		<div class="form-group">
    			<div class="form-row">
			      <div class="col">
						<select name="tipo_evento" class="btn btn-secondary dropdown-toggle" >
						<option value="0">- Tipo de evento -</option>
						@foreach ($tipos_eventos as $tipo_evento)
							 <option value="{{$tipo_evento->id}}">{{$tipo_evento->nombre_tipo_evento}}</option>
						@endforeach
				        </select>
			     </div>
			     <div class="col">
			     	   <select name="id_organismo" class="btn btn-secondary dropdown-toggle" >
					   <option value="0">- Organismo -</option>
					   @foreach ($organismos as $organismo)
						 <option value="{{$organismo->id_organismo}}">{{$organismo->nombre_organismo}}</option>
					   @endforeach
				       </select>
			     </div>
			   </div>

				<br><br>

    			<label for="nombre">Nombre del evento:</label>
    			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del evento" value="{{old('nombre')}}">

    			<br>

    			<label for="descripcion_corta">Descripción corta:</label>
    			<textarea rows="4" cols="50" class="form-control" id="descripcion_corta" name="descripcion_corta" >
    				Descripción corta del evento
    			</textarea>

    			<br>

    			<label for="descripcion_larga">Descripción larga:</label>
    			<textarea rows="4" cols="50" class="form-control" id="descripcion_larga" name="descripcion_larga" >
    				Descripción larga del evento
    			</textarea>

    			<br>

    			<div class="form-row">
			    <div class="col">
			     	<input type="text" class="form-control" id="horas" name="horas"  placeholder="Horas" value="{{old('horas')}}">
			    </div>
			    <div class="col">
			    	<input type="text" class="form-control" id="calificacion" name="calificacion" placeholder="Calificación" value="{{old('calificacion')}}">
			    </div>
			    <div class="col">
			      	<input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha" value="{{old('fecha')}}">
			    </div>
			  </div>

    		</div>
    		<button class="btn btn-primary" type="submit">Guardar</button><a class="btn btn-secondary" href="/curriculum">Atras</a>
    	</form>

    </div>
  </div>
  
@endsection