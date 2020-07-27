<?php

namespace App\Listeners;

use App\Events\UserRegistrationEvent;
use App\Mail\UserCreatedMailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class UserRegistrationListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        /**
         * Basically you DO Not need this @constructor,
         * As Nothing is initialized
         */
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistrationEvent  $event
     * @return void
     */
    public function handle(UserRegistrationEvent $event)
    {
        sleep(20);
          Mail::to($event -> user) -> send(new UserCreatedMailable($event -> user));
    }
}
