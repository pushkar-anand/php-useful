 
 # **php-useful**

 **installation**
 
`composer require pushkar/php-useful`

## Usage 

### EasyHeaders
```php
/**
* Sends a 301 MOVED PERMANENTLY header.
*/
static function moved_permanently()

/**
* Sends a 302 FOUND header.
*/
static function found()

/**
* Sends a 400 BAD REQUEST header.
*/
static function bad_request()

/**
* Sends a 401 UNAUTHORIZED header.
*/
static function unauthorized()

/**
* Sends a 403 FORBIDDEN header.
*/
static function forbidden()

/**
* Sends a 404 NOT FOUND header.
*/
static function not_found()

/**
* Sends a 408 REQUEST TIMEOUT header.
*/
static function request_timeout()

/**
* Sends a 500 INTERNAL SERVER ERROR header.
*/
static function server_error()

/**
* Sends a 501 NOT IMPLEMENTED header.
*/
static function not_implemented()

/**
* Sends a 502 BAD GATEWAY header.
*/
static function bad_gateway()

/**
* Sends a 503 SERVICE UNAVAULABLE header.
*/
static function service_unavailable()

/**
* Sends a 504 GATEWAY TIMEOUT header.
*/
static function gateway_timeout()

/**
* Sends a 422 Unprocessable Entity header.
*/
static function unprocessable_entity()

/**
* Sends a Content-Type: application/json header.
*/
static function json_header()

/**
* Sends a Content-Type: application/pdf header.
*/
static function pdf_header()

/**
* Sends a Content-Type: application/xml header.
*/
static function xml_header()

/**
* Sends a Content-Type: application/force-download header.
*/
static function download_header()

/**
* Sends a Content-Type: text-html header.
*/
static function html_header()

/**
* Sends a Content-Type: text/css header.
*/
static function css_header()

/**
* Sends a Content-Type: text/javascript header.
*/
static function js_header()

/**
* Sends a Content-Type: text/plain header.
*/
static function text_header()
```
