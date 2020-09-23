<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
       // $this->data = $data;
        //$this->attachmentFile = public_path() . '/' . $data['image'];
   
    }

    /**
     * Build the message.
     *
     * @return $this
     */

        public function build()
    {
        return $this->from('pratibharana596@gmail.com')
        ->subject('mail pratibha Equiry')
        ->view('email_template')
        ->attach(public_path($this->data['url_file']),
        [
            'as' => $this->data['url_file']->getClientOriginalName(),
            'mime' => $this->data['url_file']->getMimeType(),
        ])
        ->with('maildata', $this->data);

     }
    
}
