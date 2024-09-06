<?php

use Whoops\Handler\JsonResponseHandler as WhoopsJsonResponseHandler;
use Whoops\Run as WhoopsRun;

require __DIR__ . '/vendor/autoload.php';


ini_set("display_errors", 1);
// handle and convert all exceptions into JSON
$whoops = new WhoopsRun();
$whoops->pushHandler(new WhoopsJsonResponseHandler);
$whoops->register();


//require __DIR__ . '/src/helpers/headers.inc.php';
//require __DIR__ . '/src/helpers/misc.inc.php';
//require __DIR__ . '/src/config/config.inc.php';
//require __DIR__ . '/src/config/database.inc.php';
//require __DIR__ . '/src/Route/routes.php';
