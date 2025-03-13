<?php

namespace NotificationAPI;

class NotificationApiRegion
{
    public const US_REGION = 'US';

    public const EU_REGION = 'EU';

    public const CA_REGION = 'CA';

    private const BASE_URLS = [
        self::US_REGION => 'https://api.notificationapi.com',
        self::EU_REGION => 'https://api.eu.notificationapi.com',
        self::CA_REGION => 'https://api.ca.notificationapi.com',
    ];

    public static function getBaseUrl(string $region): string
    {
        if (! isset(self::BASE_URLS[$region])) {
            throw new \InvalidArgumentException("Invalid region: {$region}. Must be one of: ".implode(', ', array_keys(self::BASE_URLS)));
        }

        return self::BASE_URLS[$region];
    }
}
