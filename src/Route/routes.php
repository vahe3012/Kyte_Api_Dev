<?php

use KyteApi\Service\Exception\CredentialsInvalidException;
use KyteApi\Route\Exception\NotFoundException;
use PH7\JustHttp\StatusCode;
use PH7\PhpHttpResponseHeader\Http;

$resource = $_REQUEST['resource'] ?? null;

//var_dump("stexica");die();

if (empty($resource)) {
    require __DIR__ . '/../../public/home.html';
}

//
try {
    return match ($resource) {
        '', '/' => require __DIR__ . '/../../public/home.php',
        'user' => require 'user.routes.php',
        'flights' => require 'flights.routes.php',
        default => require 'not-found.routes.php',
    };

    var_dump($resource,"stexica");die();

} catch (CredentialsInvalidException $e) {
    response([
        'message' => $e->getMessage()
    ]);
} catch (NotFoundException $e) {
    // FYI, not-found.Route already sends a 404 Not Found HTTP code
    return require 'not-found.routes.php';
}
