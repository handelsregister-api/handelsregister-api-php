<?php
namespace handelsregister\Api;

use handelsregister\Endpoints;
use handelsregister\Client;

class AnnouncementDetails
{    
    private $client;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get announcement details for a unique announcement id (refer listAnnouncements api for prim_uid).
     * @param array $params
     * @return array
     */
    public function get($params) {

        return $this->client->post(Endpoints::getAnnouncementDetails, $params);
    }
}