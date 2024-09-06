<?php

namespace KyteApi\DAL;

use RedBeanPHP\R;

final class AirportDAL
{
    public const TABLE_NAME = 'airports';


    public static function autocomplete($query): array
    {
        $itemsBean = R::findAll(self::TABLE_NAME, ' name LIKE ? OR municipality LIKE ? ', ["%$query%", "%$query%"]);

        if (!$itemsBean) {
            return [];
        }
        $results = array_map(
            function ($itemBean): array {
                return [
                    'name' => $itemBean->name,
                    'municipality' => $itemBean->municipality,
                    'iata_code' => $itemBean->iata_code,
                ];
            },
            array_values($itemsBean) // Use array_values to get an indexed array
        );
        return $results;
    }
}
