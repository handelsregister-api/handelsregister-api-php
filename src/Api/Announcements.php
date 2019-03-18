<?php
namespace handelsregister\Api;

use handelsregister\Endpoints;
use handelsregister\Client;

class Announcements
{    
    private $client;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * List all announcements for a company with optional parameters. Request payload should either have
     * company_name or all of the three parameters namely,
     * register_type (id from getRegisterTypes)
     * company_number
     * registration_court_id (court id from getRegistrationCourts).
     * 
     * @param array $params
     * @return array
     */
    public function get($params) {

        return $this->client->post(Endpoints::listAnnouncements, $params);
    }
}