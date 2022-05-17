<?php

namespace App\Mail;

use App\Models\Reservacion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservacionesHechas extends Mailable
{
    use Queueable, SerializesModels;
    public $reservaciones;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->reservaciones = Reservacion::all();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail/reservaciones-hechas');
    }
}
