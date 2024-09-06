<?php

namespace KyteApi\Service;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Log\LogLevel;

final class LOG
{
    private static $logger;

    public static function emergency($message, array $context = array())
    {
        self::log(LogLevel::EMERGENCY, $message, $context);
    }

    public static function log($level, $message, array $context = array())
    {
        if(self::$logger === null) {
            self::setupLogger();
        }
        self::$logger->log($level, $message, $context);
    }

    private static function setupLogger()
    {
        $formatter = new LineFormatter(null, null, true);
        $stream = new StreamHandler(__DIR__.'/../../logs/api.log', Level::Debug);
        self::$logger = new Logger('KyteApi');
        self::$logger->pushHandler($stream);

    }




}
