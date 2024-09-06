<?php

use PH7\JustHttp\StatusCode;
use PH7\PhpHttpResponseHeader\Http;

/**
 * @throws JsonException
 */
$getResponse = static fn(): string => json_encode(['error' => 'Request not found'], JSON_THROW_ON_ERROR);

// Send HTTP 404 Not Found
//Http::setHeadersByCode(StatusCode::NOT_FOUND);
//echo $getResponse();

