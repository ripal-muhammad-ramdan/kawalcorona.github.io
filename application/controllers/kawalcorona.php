<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kawalcorona extends CI_Controller
{
    public function __construct()
    {
        //row_array
        //call parent construct
        parent::__construct();
        //load lybrary form validation | 
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    function index()
    {
        // Total Covid-19 Di Indonesia
        $API = "https://api.kawalcorona.com/indonesia/";
        $client = curl_init($API);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        $result = json_decode($response);

        // Covid-19 Berdasarkan Provinsi
        $APIprov = "https://api.kawalcorona.com/indonesia/provinsi/";
        $clientProv = curl_init($APIprov);
        curl_setopt($clientProv, CURLOPT_RETURNTRANSFER, true);
        $responseProv = curl_exec($clientProv);
        $resultProv = json_decode($responseProv);

        $data['corona'] = $result;
        $data['prov'] = $resultProv;
        $this->load->view('corona-api', $data);
    }
}
