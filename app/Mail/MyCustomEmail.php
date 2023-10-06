<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyCustomEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $token;
    public function __construct($token)
    {
        $this->token = $token;
    }

    public function build()
    {
        return $this->subject('Set Your Password')
                    ->view('emails.my_custom_email')
                    ->with(['token' => $this->token]);
    }
}
