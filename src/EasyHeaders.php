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
    static function moved_permanently()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 301 MOVED PERMANENTLY',
            true,
            301);
        exit();
    }

    static function found()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 302 FOUND',
            true,
            302);
        exit();
    }

    static function bad_request()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 400 BAD REQUEST',
            true,
            400);
        exit();
    }

    static function unauthorized()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 401 UNAUTHORIZED',
            true,
            401);
        exit();
    }

    static function forbidden()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 403 FORBIDDEN',
            true,
            403);
        exit();
    }

    static function not_found()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 NOT FOUND',
            true,
            404);
        exit();
    }

    static function request_timeout()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 408 REQUEST TIMEOUT',
            true,
            408);
        exit();
    }

    static function server_error()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 INTERNAL SERVER ERROR',
            true,
            500);
        exit();
    }

    static function not_implemented()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 501 NOT IMPLEMENTED',
            true,
            501);
        exit();
    }

    static function bad_gateway()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 502 BAD GATEWAY',
            true,
            502);
        exit();
    }

    static function service_unavailable()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 503 SERVICE UNAVAILABLE',
            true,
            503);
        exit();
    }

    static function gateway_timeout()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 504 GATEWAY TIMEOUT',
            true,
            504);
        exit();
    }

    static function json_header()
    {
        header('Content-Type: application/json');
    }

    static function pdf_header()
    {
        header('Content-Type: application/pdf');
    }

    static function xml_header()
    {
        header('Content-Type: application/xml');
    }

    static function download_header()
    {
        header('Content-Type: application/force-download');
    }

    static function html_header()
    {
        header('Content-Type: text/html');
    }

    static function css_header()
    {
        header('Content-Type: text/css');
    }

    static function js_header()
    {
        header('Content-Type: text/javascript');
    }

    static function text_header()
    {
        header('Content-Type: text/plain');
    }

}
