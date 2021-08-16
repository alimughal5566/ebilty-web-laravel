<?php
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
if (!function_exists('sendNotification')) {


function sendNotification($data) {
    $notifications = new App\Notification;
    $notifications->sender_id = $data['sender_id'];
    $notifications->message = $data['message'];
    $notifications->receiver_id = $data['receiver_id'];
    $notifications->save();
    return "success";
 }
}
        if (!function_exists('sendnote')) {
    function sendnote($s_id,$r_id,$message ) {
    $data['receiver_id']=$r_id;
    $data['sender_id']=$s_id;
    $data['message']=$message;
    event(new App\Events\NotificationEvent($data));
    return "success";
 }
    }


    if (!function_exists('sendPushNotification')) {
      function sendPushNotification($data) {
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
         return $message;
   }
      }