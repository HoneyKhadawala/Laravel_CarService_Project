<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AcceptEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    //$subject="";
    public function __construct($data)
    {
        //
        $this->viewname=$data["viewname"];
        $this->subject=$data["subject"];
        $this->accept_mail_data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('officialitcommunity@gmail.com','Auto Care')->subject($this->subject)->view($this->viewname,['mail_data'=>$this->accept_mail_data]);
    }
}
