<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class SendKeyRegistration extends Mailable
{
    use Queueable, SerializesModels;
    public $userInfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $userInfo)
    {
        $this->userInfo = $userInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.SendingKey');
    }
}
