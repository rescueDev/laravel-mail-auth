<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $stringText;

    public function __construct($stringText)
    {
        $this->stringText = $stringText;
    }


    public function build()
    {
        return $this->from('laravelsupport@gmail.com')
            ->view('mail.testMail');
    }
}
