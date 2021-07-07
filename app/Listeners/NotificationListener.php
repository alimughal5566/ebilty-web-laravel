<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotificationListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
//        dd($event->data);
        $data['sender_id'] = $event->data['sender_id'];
        $data['message'] = $event->data['message'];
        $data['receiver_id'] = $event->data['receiver_id'];
        sendNotification($data);
    }
}