@extends('layouts.base')

@section('title') Contacto @endsection

@section('contenido')
	<h2 align="center">Contacto</h2>

	<div class="row">
    <div class="col">
    	
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    	<form action="/contacto/confirmSendMail" method="POST">
            @csrf 
    		<div class="form-group">
                <br>
                 <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">

                 <br>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email')}}">


    			<br>
    			<input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto" value="{{old('asunto')}}">
    			<br>
    			<textarea rows="4" cols="50" class="form-control" id="contenido" name="contenido" value="{{old('contenido')}}">Contenido
    			</textarea>

    		</div>
    		<a class="btn btn-secondary" href="/">Atras</a><button class="btn btn-primary" type="submit">Vista Previa</button>
    	</form>

    </div>
  </div> 
   
@endsection