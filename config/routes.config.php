<?php

$baseConfig['routes'] = [
    [
        'GET',
        '/',
        'index',
    ],
    [
        'GET',
        '/index[/{action}]',
        'index',
    ],
    [
        'GET',
        '/download',
        'download',
    ],
];