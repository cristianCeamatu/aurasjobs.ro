<?php

namespace App\Listeners;

use App\Events\ContactCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNotifications implements ShouldQueue
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
     * @param  ContactCreated  $event
     * @return void
     */
    public function handle(ContactCreated $event)
    {
        //
        \Mail::to($event->contact->email)
            ->cc(config('app.email'))
            ->send(new \App\Mail\ContactRequestMail($event->contact));
    }
}
