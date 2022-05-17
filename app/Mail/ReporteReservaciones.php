<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReporteReservaciones extends Mailable
{
    use Queueable, SerializesModels;
    public $reservacion;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reservacion)
    {
        $this->reservacion = $reservacion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.reporte-reservaciones');
    }
}
