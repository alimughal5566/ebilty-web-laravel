<?php
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
