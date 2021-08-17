<?php

namespace Afiqyajid\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $remark;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($remark, $name)
    {
        $this->remark = $remark;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with(['message' => $this->remark, 'name' => $this->name]);
    }
}
