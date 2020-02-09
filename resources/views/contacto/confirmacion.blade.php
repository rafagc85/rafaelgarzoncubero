@extends('layouts.base')

@section('title')Confirmar envío de mensaje @endsection


@section('contenido')
<h2 align="center">Confirmar envío de mensaje</h2>
<br>

 <div class="row">
    <div class="col">
      <div id="tabla_confirmacionmail"  style="padding-left: 40px;">
        <table id="confirmacion_email" name="confirmacion_email">
          <tr><td><b>Nombre: </b></td><td>&nbsp;&nbsp;</td><td>{{$nombre}}</td></tr>
          <tr><td><b>Email: </b></td><td>&nbsp;&nbsp;</td><td>{{$email}}</td></tr>
          <tr><td><b>Asunto: </b></td><td>&nbsp;&nbsp;</td><td>{{$asunto}}</td></tr>
          <tr><td><b>Mensaje: </b></td><td>&nbsp;&nbsp;</td><td>{{$contenido}}</td></tr>
        </table>
       </div>
      
    </div>
  </div> 
  <br><br><br>

   <form action="/contacto/SendMail" method="POST">
      @csrf 
   <div class="form-group">
    <input type="hidden" class="form-control" id="nombre" name="nombre" value="{{$nombre}}">
    <input type="hidden" class="form-control" id="email" name="email" value="{{$email}}">
    <input type="hidden" class="form-control" id="asunto" name="asunto" value="{{$asunto}}" >
   <input type="hidden" class="form-control" id="contenido" name="contenido" value="{{$contenido}}">

 </div>
 <div  style="padding-left: 40px;">
  <button class="btn btn-primary" type="submit">Enviar</button>
</div>
 </form>
 
  
@endsection