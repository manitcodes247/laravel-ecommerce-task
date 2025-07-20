<?php

return [

    'web' => [
        'path' => base_path('routes/web.php'),
        'middleware' => ['web'],
    ],

    'api' => [
        'path' => base_path('routes/api.php'),
        'middleware' => ['api'],
        'prefix' => 'api',
    ],

];
