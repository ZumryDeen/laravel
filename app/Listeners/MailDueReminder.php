<?php

namespace App\Listeners;

use App\Events\ReminderDue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailDueReminder
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
     * @param  ReminderDue  $event
     * @return void
     */
    public function handle(ReminderDue $event)
    {
         dd($event);
    }
}
