<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContacto extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $nombre;
    private $email;
    private $asunto;
    private $contemido;

    public function __construct($nombre, $email, $asunto, $contenido)
    {
       $this->nombre = $nombre; 
       $this->email = $email;
       $this->asunto = $asunto;
       $this->contenido = $contenido;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contacto.mail',[
            'nombre'=>$this->nombre,
            'email'=>$this->email,
            'asunto'=> $this->asunto,
            'contenido'=>$this->contenido
        ]);
    }
}
