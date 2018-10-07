<?php

namespace PhpUseful;

/**
 * Class EasyHeaders
 * @package PhpUseful
 *
 * This class list of the commonly used headers as easy to call static methods
 *
 * 
 */
class EasyHeaders
{

    /**
     * Sends a 301 MOVED PERMANENTLY header.
     */
    static function moved_permanently()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 301 MOVED PERMANENTLY',
            true,
            301);
        exit();
    }

    /**
     * Sends a 302 FOUND header.
     */
    static function found()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 302 FOUND',
            true,
            302);
        exit();
    }

    /**
     * Sends a 400 BAD REQUEST header.
     */
    static function bad_request()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 400 BAD REQUEST',
            true,
            400);
        exit();
    }

    /**
     * Sends a 401 UNAUTHORIZED header.
     */
    static function unauthorized()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 401 UNAUTHORIZED',
            true,
            401);
        exit();
    }

    /**
     * Sends a 403 FORBIDDEN header.
     */
    static function forbidden()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 403 FORBIDDEN',
            true,
            403);
        exit();
    }

    /**
     * Sends a 404 NOT FOUND header.
     */
    static function not_found()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 NOT FOUND',
            true,
            404);
        exit();
    }

    /**
     * Sends a 408 REQUEST TIMEOUT header.
     */
    static function request_timeout()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 408 REQUEST TIMEOUT',
            true,
            408);
        exit();
    }

    /**
     * Sends a 500 INTERNAL SERVER ERROR header.
     */
    static function server_error()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 INTERNAL SERVER ERROR',
            true,
            500);
        exit();
    }

    /**
     * Sends a 501 NOT IMPLEMENTED header.
     */
    static function not_implemented()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 501 NOT IMPLEMENTED',
            true,
            501);
        exit();
    }

    /**
     * Sends a 502 BAD GATEWAY header.
     */
    static function bad_gateway()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 502 BAD GATEWAY',
            true,
            502);
        exit();
    }

    /**
     * Sends a 503 SERVICE UNAVAULABLE header.
     */
    static function service_unavailable()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 503 SERVICE UNAVAILABLE',
            true,
            503);
        exit();
    }

    /**
     * Sends a 504 GATEWAY TIMEOUT header.
     */
    static function gateway_timeout()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 504 GATEWAY TIMEOUT',
            true,
            504);
        exit();
    }

    /**
     * Sends a 422 Unprocessable Entity header.
     */
    static function unprocessable_entity()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 422 Unprocessable Entity',
            true,
            422);
        exit();
    }

    /**
     * Sends a Content-Type: application/json header.
     */
    static function json_header()
    {
        header('Content-Type: application/json');
    }

    /**
     * Sends a Content-Type: application/pdf header.
     */
    static function pdf_header()
    {
        header('Content-Type: application/pdf');
    }

    /**
     * Sends a Content-Type: application/xml header.
     */
    static function xml_header()
    {
        header('Content-Type: application/xml');
    }

    /**
     * Sends a Content-Type: application/force-download header.
     */
    static function download_header()
    {
        header('Content-Type: application/force-download');
    }

    /**
     * Sends a Content-Type: text-html header.
     */
    static function html_header()
    {
        header('Content-Type: text/html');
    }

    /**
     * Sends a Content-Type: text/css header.
     */
    static function css_header()
    {
        header('Content-Type: text/css');
    }

    /**
     * Sends a Content-Type: text/javascript header.
     */
    static function js_header()
    {
        header('Content-Type: text/javascript');
    }

    /**
     * Sends a Content-Type: text/plain header.
     */
    static function text_header()
    {
        header('Content-Type: text/plain');
    }
}


