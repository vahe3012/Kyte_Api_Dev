<?php
// miscellaneous file (MISC)
const PASSWORD_COST_FACTOR = 12;

/**
 * @throws JsonException
 */
function response($data): void {
    echo json_encode($data, JSON_THROW_ON_ERROR);
}

function hashPassword(string $password): false|null|string {
    return password_hash($password, PASSWORD_ARGON2I, ['cost' => PASSWORD_COST_FACTOR]);
}

function subview($file){
    $file = __DIR__.'/../sub-views/'.$file;

    var_dump(__DIR__.'../DAL');die();
    include $file;
}

