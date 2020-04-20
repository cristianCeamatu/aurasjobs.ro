<?php

namespace App\Listeners\Candidates;

use App\Events\Candidates\CandidateCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyOfficeNewCandidate implements ShouldQueue
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
     * @param  CandidateCreated  $event
     * @return void
     */
    public function handle(CandidateCreated $event)
    {
        //
        \Mail::to(config('app.email'))
        ->send(new \App\Mail\NewCandidateMail($event->candidate));
    }
}
