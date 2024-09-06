<?php

namespace KyteApi\Route;

use KyteApi\enums\UserAction;

$action = $_REQUEST['action'] ?? null;

$userAction = UserAction::tryFrom($action);

if ($userAction) {
    echo $userAction->getResponse();
} else {
    require_once 'not-found.routes.php';
}
