<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactRequestMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $contactRequest;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        //
        $this->contactRequest = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactRequest')
                    ->subject('Contact Request')
                    ->with('contactRequest', $this->contactRequest);
    }
}
