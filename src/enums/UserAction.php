<?php

namespace KyteApi\enums;

use KyteApi\Route\Exception\NotFoundException;
use KyteApi\Route\Http;
use KyteApi\Service\Exception\EmailExistsException;
use KyteApi\Service\SecretKey;
use KyteApi\Service\User;
use KyteApi\Validation\Exception\InvalidValidationException;
use PH7\JustHttp\StatusCode;
use PH7\PhpHttpResponseHeader\Http as HttpResponse;
use RedBeanPHP\RedException\SQL;

enum UserAction: string
{
    case LOGIN = 'login';
    case CREATE = 'create';
    case RETRIEVE_ALL = 'retrieveall';
    case RETRIEVE = 'retrieve';
    case REMOVE = 'remove';
    case UPDATE = 'update';

    /**
     * Get the appropriate response for the action.
     *
     * @return string JSON-encoded response
     * @throws Exception\NotFoundException
     * @throws JsonException
     * @throws SQL
     */
    public function getResponse(): string
    {
        $postBody = file_get_contents('php://input');

        $postBody = json_decode($postBody);



        $userId = $_REQUEST['id'] ?? '';

        // Retrieve JWT secret key and pass it to User Service's constructor
        $jwtToken = SecretKey::getJwtSecretKey();



        $user = new User($jwtToken);


        try {
            // Check if HTTP method for the requested endpoint is valid
            $expectHttpMethod = match ($this) {
                self::LOGIN, self::CREATE => Http::POST_METHOD,
                self::UPDATE => Http::PUT_METHOD,
                self::RETRIEVE_ALL, self::RETRIEVE => Http::GET_METHOD,
                self::REMOVE => Http::DELETE_METHOD
            };

            if (Http::doesHttpMethodMatch($expectHttpMethod) === false) {
                throw new NotFoundException('HTTP method is incorrect. Request not found');
            }

            $response = match ($this) {
                self::LOGIN => $user->login($postBody),
                self::CREATE => $user->create($postBody),
                self::UPDATE => $user->update($postBody),
                self::RETRIEVE_ALL => $user->retrieveAll(),
                self::RETRIEVE => $user->retrieve($userId),
                self::REMOVE => $user->remove($postBody),
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

        return json_encode($response);
    }
}
