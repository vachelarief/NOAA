<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noaa_model extends CI_Model {

    public function get_noaa_data($params)
    {
        // Use the xkript library to send the request
        $response = $this->xkript->get('https://www.ncei.noaa.gov/access/search/data-search/global-summary-of-the-month', $params);

        // Process the response data
        $data = json_decode($response, true);

        return $data;
    }
}