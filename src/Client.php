<?php
namespace handelsregister;

use handelsregister\Exceptions\InvalidApiKey;

use handelsregister\Traits\Resource;
use handelsregister\Traits\ApiRequest;

class Client
{
    use Resource, ApiRequest;

    private $api_key = '';
    private $lastResponseRaw;
    private $lastResponse;
    private $url = 'https://api.handelsregister-api.de';
    private $version = 'v1';
    const USER_AGENT = 'handelsregister PHP API SDK 1.0';
    
    /**
     * Maximum amount of time in seconds that is allowed to make the connection to the API server
     * @var int
     */
    private $curlConnectTimeout = 20;

    /**
     * Maximum amount of time in seconds to which the execution of cURL call will be limited
     * @var int
     */
    private $curlTimeout = 60;

    /**
     *  Create an instance of the SDK, passing in a configuration for it to set up
     *
     *  @param array intitial config
     *
     *  @return $this
     */
    public function __construct($api_key = '')
    {
        $this->api_key = $api_key;

        if (strlen($this->api_key) < 39) {
            throw new InvalidApiKey('Missing or invalid api key!');
        }
    }

    /**
     *  Set a custom base URL to access the API
     *
     *  @param string $url the base URL (fully qualified, eg 'https://api.yourcompany.com')
     *  @return $this
     */
    public function setBaseURL($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     *  Get the base URL
     *
     *  @return string
     */
    public function getBase()
    {
        return $this->url;
    }

    /**
     * Perform a POST request to the API
     * @param string $path Request path (e.g. 'getRegistrationCourts')
     * @param array $params Additional GET parameters as an associative array
     * @return array API response
     */
    public function post($path, $params = [])
    {
        return $this->request('POST', $path, $params);
    }

    /**
     * Return raw response data from the last request
     * @return string|null Response data
     */
    public function getLastResponseRaw()
    {
        return $this->lastResponseRaw;
    }

    /**
     * Return decoded response data from the last request
     * @return array|null Response data
     */
    public function getLastResponse()
    {
        return $this->lastResponse;
    }
}