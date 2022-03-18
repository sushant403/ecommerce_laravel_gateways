<?php

return [
    'name' => env('APP_NAME','PrintGaraun'),
    'manifest' => [
        'name' => env('APP_NAME','PrintGaraun'),
        'short_name' => 'PrintGaraun',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#ff8e00',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '72x72' => [
                'path' => asset_path('/images/icons/icon-72x72.png'),
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => asset_path('/images/icons/icon-96x96.png'),
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => asset_path('/images/icons/icon-128x128.png'),
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => asset_path('/images/icons/icon-144x144.png'),
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => asset_path('/images/icons/icon-152x152.png'),
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => asset_path('/images/icons/icon-192x192.png'),
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => asset_path('/images/icons/icon-384x384.png'),
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => asset_path('/images/icons/icon-512x512.png'),
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => asset_path('/images/icons/splash-640x1136.png'),
            '750x1334' => asset_path('/images/icons/splash-750x1334.png'),
            '828x1792' => asset_path('/images/icons/splash-828x1792.png'),
            '1125x2436' => asset_path('/images/icons/splash-1125x2436.png'),
            '1242x2208' => asset_path('/images/icons/splash-1242x2208.png'),
            '1242x2688' => asset_path('/images/icons/splash-1242x2688.png'),
            '1536x2048' => asset_path('/images/icons/splash-1536x2048.png'),
            '1668x2224' => asset_path('/images/icons/splash-1668x2224.png'),
            '1668x2388' => asset_path('/images/icons/splash-1668x2388.png'),
            '2048x2732' => asset_path('/images/icons/splash-2048x2732.png'),
        ],
        'shortcuts' => [
            [
                'name' => 'My Account',
                'description' => 'Go to My Account Dashboard',
                'url' => '/profile/dashboard',
                'icons' => [
                    "src" => asset_path('images/icons/icon-72x72.png'),
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Explore Products',
                'description' => 'Find out about Exciting New Products',
                'url' => '/category/top_picks?item=product',
                'icons' => [
                    "src" => asset_path('images/icons/icon-72x72.png'),
                    "purpose" => "any"
                ]
            ]
        ],
        'custom' => []
    ]
];
