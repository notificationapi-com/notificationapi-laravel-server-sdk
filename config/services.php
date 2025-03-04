<?php

return [
    'notification-api' => [
        'key' => env('NOTIFICATION_API_KEY'),
        'secret' => env('NOTIFICATION_API_SECRET'),
        'region' => env('NOTIFICATION_API_REGION', 'US'),
    ]
];
