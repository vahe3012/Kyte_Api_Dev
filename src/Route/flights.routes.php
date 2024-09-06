<?php

namespace KyteApi\Route;

use KyteApi\enums\FlightAction;


$action = $_REQUEST['action'] ?? null;

//var_dump($_REQUEST);

if (!$action) {
    require __DIR__ . '/../../public/flights.php'; // Handle the /flights/page route
} else {
    $userAction = FlightAction::tryFrom($action);
//var_dump($userAction, "ekav esqan");die();
    if ($userAction) {
        echo $userAction->getResponse();
    } else {
        require_once 'not-found.routes.php';
    }
}


//var_dump($action, "chka action");die();



