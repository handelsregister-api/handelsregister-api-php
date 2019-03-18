<?php
namespace handelsregister\Api;

use handelsregister\Endpoints;
use handelsregister\Client;

class AccountLimits
{    
    private $client;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get request limits for your account.
     * @return array
     */
    public function get() {
        return $this->client->post(Endpoints::getAccountLimits);
    }
}