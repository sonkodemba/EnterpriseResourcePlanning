<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserRegistrationEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     * This Constructor will get called when this class is instantiated.
     *
     * @return void
     */
    public $user;
    public function __construct($user)
    {
        $this -> user = $user;
    }

}
