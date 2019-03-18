<?php
namespace handelsregister\Api;

use handelsregister\Endpoints;
use handelsregister\Client;

class Requests
{    
    private $client;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Start a query for a company.
     * If you want to receive OCR data, optional parameter return_ocr must be set to true
     * document_type is mandatory and can have one of the following codes,

     * AD – Current hard copy printout
     * CD – Chronological hard copy printout
     * SI – Structured register content
     * Request payload must either have company_name or all of the three parameters namely,
     * register_type (id from getRegisterTypes)
     * company_number
     * registration_court_id (court ID from getRegistrationCourts).
     * @param array $params
     * @return array
     */
    public function start($params) {
        return $this->client->post(Endpoints::startRequest, $params);
    }

    /**
     * List all requests for a specific time period or for a given status.
     * @param array $params
     * @return array
     */
    public function list($params) {
        return $this->client->post(Endpoints::listRequests, $params);
    }

    /**
     * Get request details for a specific request ID.
     * @param array $params
     * @return array
     */
    public function get($params) {
        return $this->client->post(Endpoints::getRequest, $params);
    }

    /**
     * Get document contents for a given Request ID.
     * @param array $params
     * @return array
     */
    public function getDetails($params) {
        return $this->client->post(Endpoints::getRequestDetails, $params);
    }

    /**
     * Update request status from "Error" or "Processed" to "Archived" for a given Request ID.
     * @param array $params
     * @return array
     */
    public function updateStatus($params) {
        return $this->client->post(Endpoints::updateRequestStatus, $params);
    }
}