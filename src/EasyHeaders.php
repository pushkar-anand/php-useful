<?php

namespace PhpUseful;


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

    static function json_header()
    {
        header('Content-Type: application/json');
    }

}