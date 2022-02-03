<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EntryPermit extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('salamkonservasidilautkan@gmail.com')
                    ->markdown('email/email-entry-permit')
                    ->with('data', [$this->data])
                    ->subject('Surat Izin Masuk Kawasan Konservasi Telah Terbit!');
    }
}
