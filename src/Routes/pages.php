<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function(Request $request, Response $response) {

    // render the layout/view
    return $this->phpView->render($response, 'layouts/default.php', [
        'view' => [
            'template' => 'templates/home.php',
            'data'     => [
                'view_variable' => 'test'
            ]
        ]
    ]);

})->setName('home');