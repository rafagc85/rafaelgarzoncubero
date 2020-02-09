<?php

namespace App\Http\Controllers;

use App\evento;
use App\eventos_tipo;
use App\herramienta;
use App\tecnologia;
use App\organismo;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Collection;



class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Declaro esto aqui, ya que dentro de dos foreach no los detecta como variables declaradas
        $tipo_de_evento_id=array();
        $organismo_id=array();
        $herramientas=array();

        //$curriculum=evento::all();
        //$curriculum=evento::orderBy('fecha', 'DESC')->get();
        $eventos_tipos=eventos_tipo::all();

        $id_evento=0;

     //  $tecnologias[6] = collect();

/*
$herramientas=herramienta::where("evento_id","=",6)->get();
$herramienta=$herramientas->first();
$id_tecnologia=$herramienta->tecnologia_id ;
$tecnologia=tecnologia::where("id","=",$id_tecnologia)->get();
var_dump($tecnologia);
$tecnologiaa=$tecnologia->first();
echo $tecnologiaa->nombre_tecnologia;

//var_dump($herramienta);
//var_dump($herramientas);
/*
 foreach($herramientas as $herramienta){
     var_dump($herramienta->id) ;
 }

     */       
 
        foreach ( $eventos_tipos as $tipo_evento)
        {
            $id_evento_tipo=$tipo_evento->id;
            $eventos_por_tipoEvento[$id_evento_tipo]=evento::where("id_tipo_evento","=", $id_evento_tipo)->orderBy('fecha', 'DESC')->get();




            foreach ($eventos_por_tipoEvento[$id_evento_tipo] as $evento)
            {
                $id_organismo=$evento->id_organismo;
                $id_evento=$evento->id;

                $tipo_de_evento_id[$id_evento_tipo] = eventos_tipo::findOrFail($id_evento_tipo);
                $organismo_id[$id_organismo] = organismo::where("id","=", $id_organismo)->get();
                        
                //$herramientas[$evento->id] = $evento->herramientas;
                $herramientas=herramienta::where("evento_id","=",$evento->id)->get();
                $tecnologias[$id_evento] = collect();
                foreach ($herramientas as $herramienta) {

                    $id_tecnologia=$herramienta->tecnologia_id ;
                   // $tecnologias[$id_evento_tipo]=tecnologia::where("id","=",$id_tecnologia)->get();
                   // echo $id_evento;
                    
                    $tecnologias[$id_evento]->push(tecnologia::where("id","=",$id_tecnologia)->get());

                }

 //$tecnologias[6]=tecnologia::where("id","=",1)->get();


            } 

        }


             
                     
   

//print_r( $herramientas[6]->tecnologia);//[6];//["tecnologia_id"];

/*        
$i=0; 
foreach($eventos_por_tipoEvento[1] as $el_tipo)
{
    $i++;
   // echo "$el_organismo->nomre_organismo";
     var_dump($el_tipo);
    echo "bluque: $i ";

}*/
/*
$i=0; 
foreach($organismo_id[1] as $el_organismo)
{
    $i++;
   // echo "$el_organismo->nomre_organismo";
    // var_dump($el_organismo);
    echo "$el_organismo->nombre_organismo";
    echo "bluque: $i ";

} */



      /*  
        foreach ($curriculum as $evento)
        {
            // ver si mejor colecciones de objetos

            $id_evento_tipo=$evento->id_tipo_evento;
            $id_organismo=$evento->id_organismo;

            $tipo_de_evento_id[$id_evento_tipo] = eventos_tipo::find($id_evento_tipo);
            $organismo_id[$id_organismo] = organismo::find($id_organismo);
         

           
            $herramientas[$evento->id] = $evento->herramientas;
            
            /*
            $i=0;
            foreach ($evento->herramientas as $herramienta)
            {

                $id=$herramienta->tecnologia_id;
                $tecnologias[
                    $j => tecnologia::find($id);

                      ]
                $i++; 
            }

           $j++; 
           
        }*/
/*
 $eventos_por_tipoEvento[1]=evento::where("id_tipo_evento","=",1)->get();;

         foreach($eventos_por_tipoEvento[1] as $este_evento)
         {
                        echo "$este_evento->nombre";

                            echo'1';
         }
       */



// var_dump($eventos_por_tipoEvento[1]);
 //where("id_tipo_evento","=",1);

        return view('curriculum.index',
            [
             'eventos_tipo'=>$eventos_tipos,
             'eventos_por_tipoEvento'=> $eventos_por_tipoEvento,
             'tipo_de_evento_id'=>$tipo_de_evento_id,
             'organismo_id'=>$organismo_id,
             'herramientas'=>$herramientas,
             'tecnologias'=>$tecnologias
             //,'curriculum'=>$curriculum,
           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_de_eventos =  eventos_tipo::all();
        $organismos = organismo::all();

        

        return view('curriculum.create',[
            'tipos_eventos' => $tipos_de_eventos,
            'organismos' =>  $organismos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaData = $request->validate([
            'nombre' => 'required|min:5'
        ]);

        $nuevo_evento = new evento();
        $nuevo_evento->nombre = $request->get('nombre');
        $nuevo_evento->save(); 

        return redirect('/curriculum');
    }

    /**
     * Display the specified resource.
     *
     * @param  evento $evento
     * @return \Illuminate\Http\Response
     */
    /*
    public function show(evento $evento)
    {
        //$ver_evento = evento::findOrFail($id);
        return view('curriculum.show', [
            'ver_evento' => $evento
        ]);
    }
      */

     public function show($id)
    {
        $ver_evento = evento::findOrFail($id);
        $herramientas = $ver_evento->herramientas;
        
        $i=0;
        foreach ($ver_evento->herramientas as $herramienta){

            $id=$herramienta->tecnologia_id;
            $tecnologias[$i] = tecnologia::findOrFail($id);

            $i++; 
        }
                           
    
        return view('curriculum.show', [
            'ver_evento' =>  $ver_evento,
           'tecnologias' => $tecnologias
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editar_evento = evento::findOrFail($id);
        return view('curriculum.edit', [
            'editar_evento' => $editar_evento
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd('put update');
        $update_evento = evento::findOrFail($id);
        $update_evento->id_tipo_evento = $request->get('id_tipo_evento');
        $update_evento->nombre = $request->get('nombre');
        $update_evento->descripcion_corta = $request->get('descripcion_corta');
        $update_evento->save();

        return redirect('/curriculum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar_evento = evento::findOrFail($id);
        $eliminar_evento->delete();

        return redirect('/curriculum');
    }

    public function confirmDelete($id)
    {
       // dd('confirmDelete' . $id);
        $eliminar_evento = evento::findOrFail($id);
        return view('curriculum.confirmDelete' ,
            ['eliminar_evento' =>  $eliminar_evento
            ]);
    }
}
