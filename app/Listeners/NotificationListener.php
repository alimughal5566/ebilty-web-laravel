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
        $data['sender_id'] = 1;
        $data['message'] = "sdfdsfds";
        $data['receiver_id'] = 2;
        sendNotification($data);
        // $user = \Auth::user();
        // $user->name = "aaa";
        // $user->save();
    }
}
