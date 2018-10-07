 
 # php-useful
 
 A library of all commonly used PHP things.
 
 [Functions.php](https://github.com/pushkar-anand/php-useful/blob/master/src/Functions.php): has some most used functions
 
 [EasyHeaders.php](https://github.com/pushkar-anand/php-useful/blob/master/src/EasyHeaders.php): has methods to easily set headers
 
 [Curl.php](https://github.com/pushkar-anand/php-useful/blob/master/src/Curl.php): a wrapper for PHP ext-curl.
 
## Installation

Use composer
 
`composer require pushkar/php-useful`

Or download the source and include mannualy

## Usage 

When using composer require the autoload file at the start of the php script
```php 
 require_once __DIR__ . '/path/to/vendor/autoload.php';
```
Add the namespace
```php
 use PhpUseful\Functions;   // for using the Functions class
 use PhpUseful\EasyHeaders; // for using the EasyHeader class
 use PhpUseful\Curl;        // for using the Curl class;
```
All the methods are static except in the Curl class so you can directly use them without creating the class object.


#### Functions class
Example usage
```php
 $random_ str = Functions::random_string(int $length);
```
All the class methods are listed below.
```php
    static function random_string(int $length): string      // returns a random string of given length
    static function escape_input(string $input): string     // returns escaped string for the given input string
```

#### EasyHeaders

For using methods from Easy class  
```php
 EasyHeaders::not_found();
```
All the class methods are listed below.
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

#### Curl class

Example usage 
```php
    require_once __DIR__ . '/path/to/vendor/autoload.php';
    use PhpUseful\Curl;
    
    $curl = new Curl();
    $curl->setUrl('http://example.com');
    $curl->execute();
```

All methods 
```php
    //Required. sets the url for the curl request. Throws Exception on invalid url.
    function setUrl(string $url)  
    
    // Set headers for the curl request
    function setHeaders(array $headers)     
    
    // when set to true it return the result of the curl_exec() as a string instead of outputting it directly.
    function setReturn(bool $bool)
    
    // when set to true POST method is used for the curl request
    function usePost(bool $bool)
    
    // set data to be sent via POST. For this to work usePost() should be set to true
    function setArrayPostData(array $data)
    
    // set data to be sent via POST. For this to work usePost() should be set to true
    function setStringPostData(string $data)
    
    // Call this after setting all url, headers, method & data
    function execute()
    
    // return the headers sent for the curl request.
    function getSentHeader()
    
    // return the reponse. Will work only when setReturn() is set to true.
    function getResult()
```

