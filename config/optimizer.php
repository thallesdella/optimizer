<?php

return [
    'site' => [
    
        /*
        |--------------------------------------------------------------------------
        | Site Name
        |--------------------------------------------------------------------------
        |
        | This value is the name of your website. This value is used when the
        | lib needs to place the websites's name in a titles for SMO optimizations.
        |
        */
    
        'name' => env('SITE_NAME', env('APP_NAME')),
    
        /*
        |--------------------------------------------------------------------------
        | Site Description
        |--------------------------------------------------------------------------
        |
        | This value is the description of your website. This value is used when the
        | framework needs to place the website's description in a tag for SMO optimizations.
        |
        */
        'description' => env('SITE_DESC'),
    
        /*
        |--------------------------------------------------------------------------
        | Site Share Image
        |--------------------------------------------------------------------------
        |
        | This value is the image that the social networks will display. This image should be
        | 1200 x 630 px for a full size banner.
        |
        */
        'image' => env('SITE_IMAGE'),
    
        /*
        |--------------------------------------------------------------------------
        | Site Micro Formats Schema
        |--------------------------------------------------------------------------
        |
        | This value is the name of your application. This value is used when the
        | framework needs to place the application's name in a notification or
        | any other location as required by the application or its packages.
        |
        */
        'schema' => env('SITE_SCHEMA', 'article')
    ],
    'fb' => [
    
        /*
        |--------------------------------------------------------------------------
        | Auto Facebook SMO Optimization
        |--------------------------------------------------------------------------
        |
        | This value is the name of your application. This value is used when the
        | framework needs to place the application's name in a notification or
        | any other location as required by the application or its packages.
        |
        */
        'auto' => env('FB_AUTO', false),
    
        /*
        |--------------------------------------------------------------------------
        | Facebook Page ID
        |--------------------------------------------------------------------------
        |
        | This value is the name of your application. This value is used when the
        | framework needs to place the application's name in a notification or
        | any other location as required by the application or its packages.
        |
        */
        'page' => env('FB_PAGE', null),
    
        /*
        |--------------------------------------------------------------------------
        | Facebook Author ID
        |--------------------------------------------------------------------------
        |
        | This value is the name of your application. This value is used when the
        | framework needs to place the application's name in a notification or
        | any other location as required by the application or its packages.
        |
        */
        'author' => env('FB_AUTHOR', null),
    
        /*
        |--------------------------------------------------------------------------
        | Facebook App ID
        |--------------------------------------------------------------------------
        |
        | This value is the name of your application. This value is used when the
        | framework needs to place the application's name in a notification or
        | any other location as required by the application or its packages.
        |
        */
        'app' => env('FB_APP', false),
    
        /*
        |--------------------------------------------------------------------------
        | Facebook Page Admins
        |--------------------------------------------------------------------------
        |
        | This value is the name of your application. This value is used when the
        | framework needs to place the application's name in a notification or
        | any other location as required by the application or its packages.
        |
        */
        'admins' => env('FB_ADMINS', false),
    ],
    'twitter' => [
    
        /*
        |--------------------------------------------------------------------------
        | Auto Twitter SMO Optimization
        |--------------------------------------------------------------------------
        |
        | This value is the name of your application. This value is used when the
        | framework needs to place the application's name in a notification or
        | any other location as required by the application or its packages.
        |
        */
        'auto' => env('TWITTER_AUTO', false),
    
        /*
        |--------------------------------------------------------------------------
        | Twitter Creator Name
        |--------------------------------------------------------------------------
        |
        | This value is the name of your application. This value is used when the
        | framework needs to place the application's name in a notification or
        | any other location as required by the application or its packages.
        |
        */
        'creator' => env('TWITTER_CREATOR', null),
    
        /*
        |--------------------------------------------------------------------------
        | Twitter Share Card
        |--------------------------------------------------------------------------
        |
        | This value is the name of your application. This value is used when the
        | framework needs to place the application's name in a notification or
        | any other location as required by the application or its packages.
        |
        */
        'card' => env('TWITTER_CARD', 'summary_large_image'),
    ]
];