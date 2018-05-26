<?php defined('SYSPATH') or die;

return array(
    'notification_live_recipients' => Kohana::env('SETTINGS_NOTIFICATION_LIVE_RECIPIENTS', false), // false
    'instant_notifications_live' => Kohana::env('SETTINGS_INSTANT_NOTIFICATIONS_LIVE', false), // false,
    'instant_activities_live' => Kohana::env('SETTINGS_INSTANT_ACTIVITIES_LIVE', false), // false,
    'admin_companies' => array(
        2007, // dealroom.co
    ),
    'server_name' => Kohana::env('SETTINGS_SERVER_NAME', 'kohana.local'), // 'dealroom.dev',
    'server_env' => Kohana::env('SETTINGS_SERVER_ENV') === 'production' ? Kohana::PRODUCTION : Kohana::DEVELOPMENT,  // !!! important for CLI apps
    'cache_driver' => Kohana::env('SETTINGS_CACHE_DRIVER', 'file'), // 'memcached',
    'maintenance_enabled' => Kohana::env('SETTINGS_MAINTENANCE_ENABLED', false), // false,
    'protocol' => Kohana::env('SETTINGS_PROTOCOL', 'https'), // 'https',
    'enable_localstorage' => Kohana::env('SETTINGS_ENABLE_LOCALSTORAGE', false), // false,
);