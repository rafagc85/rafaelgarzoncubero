@extends('layouts.base')

@section('title')Currículum Vitae @endsection


@section('contenido')
<h1 align="center">Currículum Vitae</h1>
<br>

 <div class="row">
    <div class="col">
        @foreach($eventos_tipo as $tipos_evento)
        <h3>{{$tipos_evento->nombre_tipo_evento}}</h3>

             <table border="0">

             @foreach($eventos_por_tipoEvento[$tipos_evento->id] as $evento_por_tipo)

                 <tr><td><div id="titulo" name="titulo" style="padding-left: 20px; color: 282828; font-size: 25px;">{{$evento_por_tipo->nombre}}</div>

                <div id="descripcion" name="descripcion" style="padding-left: 30px; color: 282828; font-size: 17px;">  
                 @if($organismo_id[$evento_por_tipo->id_organismo]->isNotEmpty())
                     @foreach($organismo_id[$evento_por_tipo->id_organismo] as $el_organismo)
                          {{$el_organismo->nombre_organismo}}.

                           @if(isset($el_organismo->descripcion))
                                 {{$el_organismo->descripcion}}
                           @endif
                     @endforeach
                 @endif  
                 
   


                 @if(isset($evento_por_tipo->fecha))  
                     Año&nbsp;<?php echo date("Y",strtotime("$evento_por_tipo->fecha")); ?>
                 @else
                    
                 @endif


                 @if(isset($evento_por_tipo->descripcion_corta))
                   <br>
                    {{$evento_por_tipo->descripcion_corta}}.

                 @endif


                 @if($tecnologias[$evento_por_tipo->id]->isNotEmpty())
                  Tecnologías: <b>
                    <?php // var_dump($tecnologias[$evento_por_tipo->id]); ?>
                    @foreach($tecnologias[$evento_por_tipo->id] as $tecnologia)
                         @if(isset($tecnologia))
                             
                             @foreach($tecnologia as $una_tecnologia)
                                 {{$una_tecnologia->nombre_tecnologia}}
                             @endforeach
                         @endif
                    @endforeach
                    </b>
                 @endif
                 

                
                
             
                  </div>
                 </td></tr>
                 <tr><td><br></td></tr>
            @endforeach
          </table>
          <br>
      
        @endforeach
        <br>

      


       
 
    </div>
  </div> 
  <?php // <a class="btn btn-primary" href="/curriculum/create">Nuevo evento</a> ?>
@endsection