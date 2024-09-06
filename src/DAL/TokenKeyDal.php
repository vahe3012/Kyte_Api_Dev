<?php

namespace KyteApi\DAL;
use RedBeanPHP\R;
use RedBeanPHP\RedException\SQL;

final class TokenKeyDal
{
    public const TABLE_NAME = 'secretkeys';

    /**
     * @throws SQL
     */
    public static function saveSecretKey(string $jwtKey): void
    {
        try {
            $tokenBean = R::dispense(self::TABLE_NAME);
            $tokenBean->secretKey = $jwtKey;
            R::store($tokenBean);
        } catch (SQL $e) {
            // Log or handle the SQL exception
            throw new SQL("Could not save secret key: " . $e->getMessage());
        } finally {
            R::close();
        }
    }

    /**
     * @throws SQL
     */
    public static function getSecretKey(): ?string
    {

//        try {
//            $tokenKeyBean = R::load(self::TABLE_NAME, 1);
//            return $tokenKeyBean?->secretKey;
//        } catch (SQL $e) {
//            // Log or handle the SQL exception
//            throw new SQL("Could not load secret key: " . $e->getMessage());
//        } finally {
//            R::close();
//        }

        try {
            $tokenKeyBean = R::load(self::TABLE_NAME, 1);
        } catch (SQL $e) {
            // Log or handle the exception
            throw new SQL("Could not load secret key: " . $e->getMessage());
        }

        return $tokenKeyBean?->secretKey;
    }
}
