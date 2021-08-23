<?php

namespace App\Classes;
use Kreait\Firebase\Messaging;

class Firebase{
    protected $messaging;

    public function __construct(Messaging $messaging)
    {
        $this->messaging = $messaging;
    }
    public function sendNotification(Request $request)
    {
        if (Auth::check()){
        $data['device_token'] = Auth::user()->fcm_token;
        $data['title'] = 'Your bid has been updated';
        $data['body'] = 'User has placed bid for RS 500';
        $data['image_url'] = 'http://lorempixel.com/200/50/';
        $message = sendPushNotification($data);
        $this->messaging->send($message);
        return "message sent";
        }
        else{
            return "Login please";
        }
    }
}