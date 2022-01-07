<?php

return [
    '/2/dashboard' => [
        'get' => [
            'controller' => 'DashboardController',
            'method' => 'index',
        ],
        'post' => [
            'controller' => 'DashboardController',
            'method' => 'store',
        ],
    ],
    '/2/dashboard/create' => [
        'get' => [
            'controller' => 'DashboardController',
            'method' => 'create',
        ],
    ],
];