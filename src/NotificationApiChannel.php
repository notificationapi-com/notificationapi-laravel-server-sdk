<?php

namespace NotificationAPI;

use Illuminate\Notifications\Notification;

class NotificationApiChannel
{
    public function send(mixed $notifiable, Notification $notification): bool
    {
        return (new NotificationApiService)->send($notification->toNotificationApi($notifiable));
    }
}
