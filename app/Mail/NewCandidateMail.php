<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewCandidateMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $candidate;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($candidate)
    {
        //
        $this->candidate = $candidate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.newCandidate')
                    ->subject('New Candidate ' . $this->candidate->name . ' Departament - ' . $this->candidate->department)
                    ->with('candidate', $this->candidate);
    }

}
