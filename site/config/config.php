<?php

return [
    'auth' => [
        'debug' => true
    ],
    'api' => [
        'allowInsecure' => true,
        'basicAuth' => true
    ],
    'routes' => [
        [
            'pattern' => '', // when visiting home, redirect to calendar
            'action'  => function () {
                return page('calendar/');
            }
          ]
    ],
    'debug' => true
    ];

?>