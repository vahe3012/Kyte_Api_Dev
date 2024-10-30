<?php

namespace KyteApi\DAL;

use RedBeanPHP\R;

final class AirportDAL
{
    public const TABLE_NAME = 'airports';

    public static function autocomplete($query): array
    {
        $itemsBean = R::findAll(self::TABLE_NAME, ' name LIKE ? OR city LIKE ? ', ["%$query%", "%$query%"]);

        if (!$itemsBean) {
            return [];
        }
        /** @var array $results */
        $results = array_map(
            static function ($itemBean): array {
                return [
                    'name' => $itemBean->name,
                    'municipality' => $itemBean->city,
                    'iata_code' => $itemBean->iata_code,
                ];
            },
            array_values($itemsBean)
        );
        return $results;
    }
}
