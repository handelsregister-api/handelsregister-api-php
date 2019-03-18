<?php
namespace handelsregister\Api;

use handelsregister\Endpoints;
use handelsregister\Client;

class DocumentTypes
{    
    private $client;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get all document types with document type id and name.
     * @return array
     */
    public function get() {
        return $this->client->post(Endpoints::getDocumentTypes);
    }
}