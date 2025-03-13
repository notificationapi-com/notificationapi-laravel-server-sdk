<?php

namespace NotificationAPI;

use Illuminate\Notifications\Notification;

/**
 * NotificationAPI Channel for Laravel notifications.
 *
 * To use this channel, your notification class must implement the toNotificationApi() method
 * which should return the notification data in the format expected by NotificationAPI.
 */
class NotificationApiChannel
{
    /**
     * Send the notification via NotificationAPI.
     *
     * @param  mixed  $notifiable  The entity receiving the notification
     * @param  Notification  $notification  The notification being sent (must implement toNotificationApi)
     * @return bool True if the notification was sent successfully
     */
    public function send(mixed $notifiable, Notification $notification): bool
    {
        return (new NotificationApiService)->send($notification->toNotificationApi($notifiable));
    }
}
