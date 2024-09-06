<?php

namespace KyteApi;
use KyteApi\config\Environment;
use RedBeanPHP\R;


$dsn = sprintf('mysql:host=%s;port=%s; dbname=%s', $_ENV['DB_HOST'], $_ENV['DB_PORT'], $_ENV['DB_NAME']);

R::setup($dsn, $_ENV['DB_USER'], $_ENV['DB_PASS']);

// Freeze RedBean on production
$currentEnvironment = Environment::tryFrom($_ENV['ENVIRONMENT']);

if ($currentEnvironment?->environmentName() !== Environment::DEVELOPMENT->value) {
    echo 'RedBean Frozen';
    R::freeze();
}

