<?php

$app->add(function($request, $response, $next) {

    $response = $next($request, $response);

    $response = $response->withHeader('Content-type', 'text/html');

    return $response;

});