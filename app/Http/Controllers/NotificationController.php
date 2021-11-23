<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\WebhookServer\WebhookCall;

class NotificationController extends Controller
{
    public function notificationButton(){
        return view('notificationPage');
    }

    public function SendingNotification(){
        WebhookCall::create()
            ->url('https://maker.ifttt.com/trigger/request_send/with/key/gZ4uDUwI-xu9rBDg6pYkUgVIjgB-my-h084JAK2cb4f')
            ->payload(['key' => 'value'])
            ->useSecret('sign-using-this-secret')
            ->dispatch();
        return view('dashboard');
}
}
