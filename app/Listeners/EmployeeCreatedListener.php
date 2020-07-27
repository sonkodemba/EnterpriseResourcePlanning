<?php

namespace App\Listeners;

use App\Events\EmployeeCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EmployeeCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EmployeeCreatedEvent  $event
     * @return void
     */
    public function handle(EmployeeCreatedEvent $event)
    {
        //
    }
}
