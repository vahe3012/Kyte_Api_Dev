<?php

  class Amadeus {


//  $clientId = 'Iss2GEFrVQrbqzzx1poNirIJTy8UYd2e';
//  $clientSecret = 'OjycyQ3lieSL0niK';
//  $baseUrl = 'https://test.api.amadeus.com'; // Or 'https://api.amadeus.com' for production


    private $api = "https://test.api.amadeus.com";
    private $key = "OjycyQ3lieSL0niK";

    function getInspirationFlights($origin, $dateRange, $oneWay, $direct) {
      $path = $this->api . "/v1.2/flights/inspiration-search?apikey=" . $this->key . "&origin=" . $origin . "&departure_date=" . $dateRange . "&one-way=" . $oneWay . "&direct=" . $direct;
      return $path;
    }

    function getCity($code) {
      $path = $this->api . "/v1.2/location/" . $code . "?apikey=" . $this->key;
      return $path;
    }

    function getLowFareFlights($origin, $destination, $departDate, $returnDate, $currency, $direct) {
      $path = $this->api . "/v1.2/flights/low-fare-search?apikey=" . $this->key . "&origin=" . $origin . "&destination=" . $destination . "&departure_date=" . $departDate . "&return_date=" . $returnDate . "&currency=" . $currency . "&nonstop=" . $direct . "&number_of_results=5";
      return $path;
    }

    function getLowFareFlightsOneWay($origin, $destination, $departDate, $currency, $direct) {
      $path = $this->api . "/v1.2/flights/low-fare-search?apikey=" . $this->key . "&origin=" . $origin . "&destination=" . $destination . "&departure_date=" . $departDate . "&currency=" . $currency . "&nonstop=" . $direct . "&number_of_results=5";
      return $path;
    }

    function cURL($method, $request) {
      $header[] = "Content-Type: application/json";

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $method);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $request);
      if ($request == "POST") {
        $data_string = "";
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
      }
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_ENCODING,'gzip');
      curl_setopt($ch, CURLOPT_REFERER, $this->api);
      curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
      curl_setopt($ch, CURLOPT_POST,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $content = curl_exec($ch);
      return $content;
    }

  }

  $amadeus = new Amadeus;

?>
