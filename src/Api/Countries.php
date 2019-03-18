<?php
namespace handelsregister\Api;

use handelsregister\Endpoints;
use handelsregister\Client;

class Countries
{    
    private $client;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * get list of all countries.
     * @return array
     */
    public function get() {
        return $this->client->post(Endpoints::getCountries);
    }
}