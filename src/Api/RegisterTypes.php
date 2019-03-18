<?php
namespace handelsregister\Api;

use handelsregister\Endpoints;
use handelsregister\Client;

class RegisterTypes
{    
    private $client;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get all register types with id and name.
     * @return array
     */
    public function get() {
        return $this->client->post(Endpoints::getRegisterTypes);
    }
}