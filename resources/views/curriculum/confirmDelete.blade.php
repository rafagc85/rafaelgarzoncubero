@extends('layouts.base')

@section('title')Eliminar un evento @endsection


@section('contenido')
<h1>Eliminar evento: {{ $eliminar_evento->id }}</h1>
 <div class="row">
    <div class="col">
    	
    	<form action="/curriculum/{{ $eliminar_evento->id}}" method="POST">
            @csrf 
            @method('delete')
    		
    		<button class="btn btn-primary" type="submit">Eliminar</button>
    	</form>

    </div>
  </div> 
   <a class="btn btn-secondary" href="/curriculum">Atras</a>
@endsection