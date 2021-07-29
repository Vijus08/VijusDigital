<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mensajeRecibido extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Mensaje Recibido';

    public $envio;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($envio)
    {
        $this->envio = $envio;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mensajes.mensajes-recibidos');
    }
}
