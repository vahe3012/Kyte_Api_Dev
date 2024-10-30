<?php

namespace KyteApi\Service;

use KyteApi\DAL\AirportDAL;

class Flight
{

//    public function __construct(protected string $query)
//    {
//    }


    public function autocomplete(mixed $query): array
    {
        return AirportDAL::autocomplete($query);
    }


    public function search(mixed $query)
    {
        $journeys = [];

        foreach ($query->journeys as $journey) {
            $journeys[] = [
                "departureAirport" => $journey->departureAirport,
                "arrivalAirport" => $journey->arrivalAirport,
                "date" => [
                    "main" => $journey->date->main
                ]
            ];
        }

//        var_dump($query->cabinType, "type");
        $requestData = [
            "journeys" => $journeys,
            "cabinType" => $query->cabinType,
            "nonStopFlight" => true,
            "exactMatch" => true,
            "flexibility" => "lowest",
            "passengers" => $query->passengers
        ];

//        var_dump(json_encode($jsonRequestData)); die("exav");

        $jsonRequestData = json_encode($requestData);



        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sandbox.gokyte.com/api/v3/flights/shop',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsonRequestData,
            CURLOPT_HTTPHEADER => array(
                'x-api-key: 6ef519972eaf4e11865b662325af5a8d',
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

//        var_dump(json_decode($response), "stex enq"); die();

        return json_decode($response);
    }


//    public function search(mixed $query)
//    {
////        try {
////        $apiConfig = $this->getApiConfig();
////        $url = $apiConfig['url'] . "/hotel-api/1.0/bookings/" . $reference;
////        $headers = [
////            "Accept: application/json",
////            "Accept-Encoding: gzip",
////            "Api-key: " . $apiConfig['key'],
////            "Postman-Token: f9ecfcc4-0913-417b-8045-2b061cc22577",
////            "X-Signature: " . hash("sha256", $apiConfig['key'] . $apiConfig['secret'] . time()),
////            "cache-control: no-cache"
////        ];
////
////        $response = $this->makeCurlRequest($url, $headers, "GET");
////
////        $bookingDetail = json_decode($response, false, 512, JSON_THROW_ON_ERROR);
////        $this->result['book'] = $bookingDetail->booking;
////
//////            dd($this->result['book']);
////        $this->result['hotelDetails'] = $this->getHotelDetailing($bookingDetail->booking->hotel->code);
////
////        $this->renderView("Pages/accountbookinfo", "accountbookinfo", $this->result);
////    } catch (Exception $e) {
////        $this->handleException($e, __METHOD__);
////    }
////var_dump($query->originIataCode);die();
////        var_dump($query);die();
////        var_dump(gettype($query->passengers), "123");die();
//
//        $curl = curl_init();
//        $journeyDetails = [
//            "departureAirport" => $query->originIataCode,
//            "arrivalAirport" => $query->destinationIataCode,
//
//            "date" => [
//                "main" => "2024-08-29",
//                "flexibilityRange"=> 2
//            ]
//        ];
//        $requestData = [
//            "journeys" => [$journeyDetails],
//            "cabinType" => $query->cabinType,
//            "nonStopFlight" => true,
//            "exactMatch" => true,
//            "flexibility" => "lowest",
//            "passengers" => $query->passengers
//        ];
//
//        $jsonRequestData = json_encode($requestData);
//
//curl_setopt_array($curl, array(
//    CURLOPT_URL => 'https://api.sandbox.gokyte.com/api/v3/flights/shop',
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_ENCODING => '',
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 0,
//    CURLOPT_FOLLOWLOCATION => true,
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => 'POST',
//    CURLOPT_POSTFIELDS =>$jsonRequestData,
//
//
//    CURLOPT_HTTPHEADER => array(
//        'x-api-key: 6ef519972eaf4e11865b662325af5a8d',
//        'Content-Type: application/json'
//    ),
//));
//
//
//
//$response = curl_exec($curl);
//
//curl_close($curl);
//
//
//
////var_dump(json_decode($response), "bar");die();
//return json_decode($response);
//
//    }
    public function offerDetails(mixed $query){

        $postData = [
            'offerIds' => [$query]
        ];


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sandbox.gokyte.com/api/v3/flights/shop/offer-details',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postData),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'x-api-key: 6ef519972eaf4e11865b662325af5a8d'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

//        var_dump($response, json_decode($response), "bar");die();
        return json_decode($response);
    }

    public function shopBundles(mixed $query){

        $postData = [
            'offerIds' => [$query]
        ];


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sandbox.gokyte.com/api/v3/flights/shop/bundles',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postData),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'x-api-key: 6ef519972eaf4e11865b662325af5a8d'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

//        var_dump($response, json_decode($response), "bar");die();
        return json_decode($response);
    }


    public function shopAncillaries(mixed $query){

        $postData = [
            'requestedTypes' => [
                "bag",
                "seat",
                "meal",
                "sportsEquipment",
                "service",
                "bundle"
            ]
        ];


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sandbox.gokyte.com/api/v3/flights/shop/ancillaries/'.$query,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postData),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'x-api-key: 6ef519972eaf4e11865b662325af5a8d'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

//        var_dump( json_decode($response), "bar");die();
        return json_decode($response);
    }



}
