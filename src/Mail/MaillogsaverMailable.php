<?php

namespace Devloper135\Maillogsaver\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MaillogsaverMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $maillog;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($maillog)
    {
        $this->maillog = $maillog;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('maillogsaver::maillog.email', compact($this->maillog));
    }
}