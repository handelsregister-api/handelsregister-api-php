<?php

namespace handelsregister\Traits;

use handelsregister\Exceptions\InvalidApiKey;
use handelsregister\Exceptions\InvalidRequestMethod;

trait ApiRequest
{
    /**
     * Internal request implementation
     * @param string $method POST, GET, etc.
     * @param string $path (Can be just method name like 'getRegistrationCourts' or full url to be called)
     * @param array $params
     * @param mixed $data
     * @return array
     * @throws \handelsregister\Exceptions\InvalidApiKey
     * @throws \handelsregister\Exceptions\InvalidRequestMethod
     */
    private function request($method, $path, array $params = [])
    {
        $this->lastResponseRaw = null;
        $this->lastResponse = null;

        if (strpos(strtolower($path), 'http') === 0) {
            $url = $path;
        } else {
            $url = $this->url . '/' . $this->version . '/' . trim($path, '/');
        }
        
        $data_string = [
            'api_key' => $this->api_key
        ];

        if (!empty($params) & is_array($params)) {
            $params = json_encode(array_merge($params, $data_string));
        } else {
            $params = json_encode($data_string);
        }

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: '.strlen($params))
        );
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_MAXREDIRS, 3);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $this->curlConnectTimeout);
        curl_setopt($curl, CURLOPT_TIMEOUT, $this->curlTimeout);
        curl_setopt($curl, CURLOPT_USERAGENT, self::USER_AGENT);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        $this->lastResponseRaw = curl_exec($curl);

        $errorNumber = curl_errno($curl);
        $error = curl_error($curl);
        curl_close($curl);

        if ($errorNumber) {
            throw new InvalidRequestMethod('CURL: ' . $error, $errorNumber);
        }
    
        $this->lastResponse = $response = json_decode($this->lastResponseRaw, true);

        return $response;
    }
}
