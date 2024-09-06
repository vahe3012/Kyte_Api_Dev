<?php

namespace KyteApi\Service;

use KyteApi\Dal\TokenKeyDal;
use RedBeanPHP\RedException\SQL;

class SecretKey
{
    /**
     *  Retrieves the JWT secret key from the database.
     *  If no key exists, generates and saves a new one.
     * @throws SQL
     * @throws \Exception
     */
    public static function getJwtSecretKey(): string
    {
        $jwtKey = TokenKeyDal::getSecretKey();

        if (!$jwtKey) {
            $uniqueSecretKey = bin2hex(random_bytes(32)); // 32 bytes = 256 bits
            TokenKeyDal::saveSecretKey($uniqueSecretKey);

            return $uniqueSecretKey;
        }

        return $jwtKey;
    }
}
