<?php

namespace App\Classes;
use Google\Cloud\Storage\Notification;
use Kreait\Firebase\Messaging\CloudMessage;

class Firebase{
    protected $messaging;
    public static function sendNotification($data)
    {
        $device_token = $data['device_token'];
        $title = $data['title'];
        $body = $data['body'];
        $imageUrl = $data['image_url'];
        $notification = Notification::fromArray([
            'title' => $title,
            'body' => $body,
            'image' => $imageUrl,
        ]);
        $data = [
            'first_key' => 'First Value',
            'second_key' => 'Second Value',
        ];

        $message = CloudMessage::withTarget('token', $device_token)
            ->withNotification($notification)
            ->withData($data);
        $messaging = app('firebase.messaging');
        $messaging->send($message);

        return "true";
    }
}
