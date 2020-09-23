<?php

namespace App\listners;

use App\Event\UserCreate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmail
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
     * @param  UserCreate  $event
     * @return void
     */
    public function handle(UserCreate $event)
    {
        echo $event->email;
    }
}
