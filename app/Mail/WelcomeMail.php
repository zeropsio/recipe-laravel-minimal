<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $sessionsCount;

    public function __construct($sessionsCount)
    {
        $this->sessionsCount = $sessionsCount;
    }

    public function build()
    {
        return $this->view('emails.welcome')
            ->subject('Laravel Minimal x Zerops');
    }
}
