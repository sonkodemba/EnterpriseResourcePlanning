<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserCreatedMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public  $user;
    public function __construct($user)
    {
        /**
         * THis constructor wil get executed when this is called.
         * However, the @user will be call in here
         */
        $this -> user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->markdown('emails.users.userCreatedEmail')
                    -> with([
                             'username' => $this -> user
                    ]);
    }
}
