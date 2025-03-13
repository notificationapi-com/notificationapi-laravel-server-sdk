<?php

namespace NotificationAPI;

class NotificationApiService extends NotificationAPI
{
    public function __construct(array $config = [])
    {
        $config = array_merge(
            config('services.notification-api', []),
            $config
        );

        if (empty($config['key'])) {
            throw new \InvalidArgumentException('NotificationAPI key is required');
        }

        if (empty($config['secret'])) {
            throw new \InvalidArgumentException('NotificationAPI secret is required');
        }

        $baseUrl = null;
        if (! empty($config['region'])) {
            $baseUrl = NotificationApiRegion::getBaseUrl($config['region']);
        }

        parent::__construct(
            $config['key'],
            $config['secret'],
            $baseUrl
        );
    }
}
