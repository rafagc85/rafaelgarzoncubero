@extends('layouts.base')

@section('title')Programas @endsection


@section('contenido')
<h2 align="center">Programas</h2>

<div style="height:20px; "></div>

 <div class="container">
  <div class="row">
    <div class="col-sm" style="text-align: center; ">

      <h5 >Lenguaje JAVA</h5>
      <a title="Adivina la palabra" href="{{asset('download/Juego_Adivina_La_Palabra.rar') }}" download="Adivina_la_palabra.rar" ><img src="{{asset('media/image/adivina_la_palabra.png') }}" alt="Adivina la palabra" height="150px" align="center" /></a>

    </div>
    <div class="col-sm">
     
    </div>
    <div class="col-sm">
     
    </div>
  </div>
</div>
  
@endsection