<?php

$baseConfig['middleware'] = [
    '/documentation' => function ($req, $handler) {

        $response = new \Laminas\Diactoros\Response();
        $response = $response->withStatus('302');
        $response = $response->withHeader('Location', 'https://filebrowser.readthedocs.io/en/latest/');
        return $response;
    },
    /*function ($req, $handler) {
        if (! in_array($req->getUri()->getPath(), ['/bar'], true)) {
            return $handler->handle($req);
        }

        $response = new \Laminas\Diactoros\Response();
        $response->getBody()->write('Hello world!');

        return $response;
    },
    '/baz' => \Application\Middleware\ExampleMiddleware::class,
    '/admin' => [
        \Application\Middleware\SessionMiddleware::class,
        \Application\Middleware\ExampleMiddleware::class,
    ],*/
];
