<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContacto;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('contacto.formulario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function confirmSendMail(Request $request)
    {
        $validaData = $request->validate([
            'nombre'=>'required|min:5',
            'email'=>'required|email',
            'asunto'=>'required|min:5',
            'contenido'=>'required|min:20'
             ]);

         $nombre = $request->get('nombre');
         $email = $request->get('email');
         $asunto = $request->get('asunto');
         $contenido = $request->get('contenido');

          return view('contacto.confirmacion',[
            'nombre'=>$nombre,
            'email'=>$email,
            'asunto'=>$asunto,
            'contenido'=>$contenido

         ]);
    }



    public function SendMail(Request $request)
    { 
         $nombre = $request->get('nombre');
         $email = $request->get('email');
         $asunto = $request->get('asunto');
         $contenido = $request->get('contenido');

         Mail::to("rafagc44@hotmail.com")->send(new SendContacto($nombre, $email, $asunto, $contenido));
  
         return view('contacto.formulario');
         /*
          return view('contacto.estadoEnvio',[
            'email'=>$email,
            'asunto'=>$asunto,
            'contenido'=>$contenido 

         ]);*/
    } 

}
