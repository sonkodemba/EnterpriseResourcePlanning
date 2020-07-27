<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EvendCreatedMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $meter_num;
    public $meter_name;
    public $amount;
    public function __construct($meter_num, $meter_name, $amount)
    {
        $this -> meter_num = $meter_num;
    $this -> $meter_name = $meter_name;
        $this -> amount = $amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.evends.EvendCreatedEmail')
                    -> with([
                        'meter_num' => $this -> meter_num,
                        'meter_name' => $this -> meter_name,
                        'amount' => $this -> amount
                    ]);
    }
}
