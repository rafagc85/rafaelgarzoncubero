@extends('layouts.base')

@section('title'){{$ver_evento->nombre}} @endsection


@section('contenido')
<h1>Curriculum</h1>
 <div class="row">
    <div class="col">


     <h3>{{$ver_evento->nombre}}</h3>
     	<table class="table">
            <tr>
               
                @foreach ($tecnologias as $tecnologia)
               
                       <td> Tecnología: {{  $tecnologia->tecnologia}}  </td>
   
                 @endforeach
              
            </tr>	
        </table>  
    </div>
  </div> 
   <a class="btn btn-secondary" href="/curriculum">Atras</a>
@endsection