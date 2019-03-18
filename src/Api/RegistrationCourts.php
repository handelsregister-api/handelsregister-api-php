<?php
namespace handelsregister\Api;

use handelsregister\Endpoints;
use handelsregister\Client;

class RegistrationCourts
{    
    private $client;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get all registration courts with code and name.
     * @return array
     */
    public function get() {
        return $this->client->post(Endpoints::getRegistrationCourts);
    }
}