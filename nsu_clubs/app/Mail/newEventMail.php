<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Clubs;
use App\Models\Events;

class newEventMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $club,$event;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($club_id,$event_id)
    {
        $this->club = Clubs::find($club_id);
        $this->event = Events::find($event_id);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.eventMail')->with('club',$this->club)->with('event',$this->event);
    }
}
