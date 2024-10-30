<?php

namespace KyteApi\enums;

use KyteApi\Route\Exception\NotFoundException;
use KyteApi\Route\Http;
use KyteApi\Service\Exception\EmailExistsException;
use KyteApi\Service\Flight;
use KyteApi\Validation\Exception\InvalidValidationException;
use PH7\JustHttp\StatusCode;
use PH7\PhpHttpResponseHeader\Http as HttpResponse;
enum FlightAction: string
{

    case AUTOCOMPLETE = 'autocomplete';
    case SEARCH = 'search';
    case DETAILS = 'details';
    case BUNDLES = 'bundles';
    case ANCILLARIES = 'ancillaries';
    case REMOVE = 'remove';
    case UPDATE = 'update';

    /**
     * Get the appropriate response for the action.
     *
     * @return string JSON-encoded response
     * //     * @throws Exception\NotFoundException
     * @throws JsonException
     * @throws SQL*@throws \JsonException
     */
    public function getResponse(): string
    {
        $postBody = file_get_contents('php://input');



//        var_dump($postBody); die("sdsd");

        $postBody = json_decode($postBody);

        $query = $_REQUEST['query'] ?? '';

        $flight = new Flight();


        try {
            // Check if HTTP method for the requested endpoint is valid
            $expectHttpMethod = match ($this) {
                self::SEARCH, self::DETAILS, self::BUNDLES, self::ANCILLARIES => Http::POST_METHOD,
//                self::UPDATE => Http::PUT_METHOD,
                self::AUTOCOMPLETE => Http::GET_METHOD,
                self::REMOVE => Http::DELETE_METHOD
            };

            if (Http::doesHttpMethodMatch($expectHttpMethod) === false) {
                throw new NotFoundException('HTTP method is incorrect. Request not found');
            }

            $response = match ($this) {
                self::AUTOCOMPLETE => $flight->autocomplete($query),
                self::SEARCH => $flight->search($postBody),
                self::DETAILS => $flight->offerDetails($query),
                self::BUNDLES => $flight->shopBundles($query),
                self::ANCILLARIES => $flight->shopAncillaries($query),
            };

        } catch (InvalidValidationException $e) {
            // Send 400 http status code
            HttpResponse::setHeadersByCode(StatusCode::BAD_REQUEST);

            $response = [
                'errors' => [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode()
                ]
            ];
        } catch (EmailExistsException $e) {
            HttpResponse::setHeadersByCode(StatusCode::BAD_REQUEST);

            $response = [
                'errors' => [
                    'message' => $e->getMessage()
                ]
            ];
        }

//        var_dump($response, "stex em lav"); die();
        return json_encode($response, JSON_THROW_ON_ERROR);
    }
}
