<?php

namespace PhpUseful;


use Exception;

class Curl
{
    private $curl;
    private $result;
    protected $http_response_code;


    /**
     * Curl constructor.
     */
    public function __construct()
    {
        $this->curl = curl_init();
    }

    /**
     * Set the url for the curl
     * @param string $url
     * @throws Exception
     */
    public function setUrl(string $url)
    {
        $url = filter_var($url, FILTER_VALIDATE_URL);

        if ($url == false) {
            throw new Exception("Invalid url");
        } else {
            curl_setopt($this->curl, CURLOPT_URL, $url);
        }
    }

    /**
     * when set to true it follows any "Location: " header that the server sends as part of the HTTP header.
     * @param bool $bool
     */
    public function setFollowLocation(bool $bool)
    {
        curl_setopt($this->curl, CURLOPT_FOLLOWLOCATION, $bool);
    }

    /**
     * when set to true it determines whether curl verifies the authenticity of the peer's certificate.
     * @param bool $bool
     */
    public function setVerifypeer(bool $bool)
    {
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, $bool);
    }

    /**
     * Set headers for the curl request
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $headers);
    }

    /**
     * when set to true it return the result of the curl_exec() as a string instead of outputting it directly.
     * @param bool $bool
     */
    public function setReturn(bool $bool)
    {
        if($bool) {
            curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, $bool);
        }
    }

    /**
     * when set to true POST is used
     * @param bool $bool
     */
    public function usePost(bool $bool)
    {
        if ($bool) {
            curl_setopt($this->curl, CURLOPT_POST, 1);
        }
    }

    /**
     *set data to be sent via POST
     * @param array $data
     */
    public function setArrayPostData(array $data)
    {
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);
    }

    /**
     * set data to be sent via POST
     * @param string $data
     */
    public function setStringPostData(string $data)
    {
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);
    }

    /**
     * set port to be used for request
     * @param int $port
     */
    public function setPort(int $port)
    {
        curl_setopt($this->curl, CURLOPT_PORT, $port);
    }

    /**
     * set the max number of redirects that will be followed
     * @param int $max
     */
    public function setMaxRedirects(int $max)
    {
        curl_setopt($this->curl, CURLOPT_MAXREDIRS, $max);
    }

    /**
     * set timeout for request
     * @param int $timeout time in seconds
     */
    public function setTimeout(int $timeout)
    {
        curl_setopt($this->curl, CURLOPT_TIMEOUT, $timeout);
    }

    /**
     * set the credentials used for HTTP authentication
     * @param string $username
     * @param string $password
     */
    public function setCredentials(string $username, string $password)
    {
        $userpwd = $username . ':' . $password;
        curl_setopt($this->curl, CURLOPT_USERPWD, $userpwd);
    }

    /**
     * set any CURLOPT_XXX option
     * @param int $option
     * @param mixed $value
     */
    public function setOption(int $option, mixed $value)
    {
        curl_setopt($this->curl, $option, $value);
    }

    /**
     *Execute the curl request and store the results
     */
    public function execute()
    {
        curl_setopt($this->curl, CURLINFO_HEADER_OUT, true);
        $this->result = curl_exec($this->curl);
        $this->http_response_code = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
        error_log("Curl Response: $this->result");
    }

    /**
     * Return the headers sent
     * @return mixed
     */
    public function getSentHeader()
    {
        return curl_getinfo($this->curl, CURLINFO_HEADER_OUT);
    }

    /**
     * returns the result of the curl_exec()
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Curl destructor.
     */
    public function __destruct()
    {
        curl_close($this->curl);
    }

}