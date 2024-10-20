<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noaa_data extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load the xkript library
        $this->load->library('xkript');
    }

    public function get_noaa_data()
    {
        // Set your NOAA API key
        $api_key = 'YOUR_API_KEY_HERE';

        // Set the NOAA data service endpoint
        $endpoint = 'https://www.ncei.noaa.gov/access/search/data-search/global-summary-of-the-month';

        // Set the parameters for the request
        $params = array(
            'q' => 'temperature', // query parameter
            'location' => 'New York', // location parameter
            'start' => '2022-01-01', // start date parameter
            'end' => '2022-01-31' // end date parameter
        );

        // Use xkript to send the request
        $response = $this->xkript->get($endpoint, $params, $api_key);

        // Process the response data
        $data = json_decode($response, true);

        // Do something with the data...
        print_r($data);
    }
}