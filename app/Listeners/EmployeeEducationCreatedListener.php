<?php

namespace App\Listeners;

use App\Events\EmployeeEducationCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EmployeeEducationCreatedListener
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
     * @param  EmployeeEducationCreatedEvent  $event
     * @return void
     */
    public function handle(EmployeeEducationCreatedEvent $event)
    {
        //
    }
}
