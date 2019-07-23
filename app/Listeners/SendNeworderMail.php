<?php

namespace App\Listeners;

use App\Events\NewOrder;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendNeworderMail
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
     * @param  NewOrder  $event
     * @return void
     */
    public function handle(NewOrder $event)
    {
        $data = array('name' => $event->user->name, 'email' => $event->user->email, 'body' => 'you have receve a new order');
        Mail::send('welcome', $data, function($message) use ($data) {
            $message->to($data['email'])
                ->subject('Welcome to our Website');
            $message->from('noreply@artisansweb.net');
        });
    }
}
