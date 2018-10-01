<?php

namespace PhpUseful;

/**
 * Class EasyHeaders
 * @package PhpUseful
 *
 * This class list of the commonly used headers as easy to call static methods
 */
class EasyHeaders
{
    static function bad_request()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 400 BAD REQUEST',
            true,
            400);
        exit();

    }

    static function server_error()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error',
            true,
            500);
        exit();

    }

    static function not_found()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found',
            true,
            404);
        exit();
    }

    static function forbidden()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 403 Forbidden',
            true,
            403);
        exit();
    }

    static function unauthorized()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 401 Unauthorized',
            true,
            401);
        exit();
    }

    static function unprocessable_entity()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 422 Unprocessable Entity',
            true,
            422);
        exit();
    }

    static function json_header()
    {
        header('Content-Type: application/json');
    }

}
