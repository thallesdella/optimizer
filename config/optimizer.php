<?php

return [
    'site' => [
        'name' => env('SITE_NAME', env('APP_NAME')),
        'description' => env('SITE_DESC'),
        'image' => env('SITE_IMAGE'),
        'schema' => env('SITE_SCHEMA', 'article')
    ],
    'fb' => [
        'auto' => env('FB_AUTO', false),
        'page' => env('FB_PAGE', null),
        'author' => env('FB_AUTHOR', null),
        'id' => env('FB_ID', false),
        'admins' => env('FB_ADMINS', false),
    ],
    'twitter' => [
        'auto' => env('TWITTER_AUTO', false),
        'creator' => env('TWITTER_CREATOR', null),
        'card' => env('TWITTER_CARD', 'summary_large_image'),
    ]
];