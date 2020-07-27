<?php

namespace App\Listeners;

use App\Events\EvendCreatedEvent;
use App\Mail\EvendCreatedMailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EvendCreatedListener
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
     * @param  EvendCreatedEvent  $event
     * @return void
     */
    public function handle(EvendCreatedEvent $event)
    {
        Mail::to($event -> user) -> send(new EvendCreatedMailable($event -> meter_num, $event -> meter_num, $event -> amount));
    }
}
