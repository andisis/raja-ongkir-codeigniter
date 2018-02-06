<?php

/**
 * RajaOngkir Library for CodeIgniter
 * REST Client
 * 
 * @author Andi Siswanto <andisis92@gmail.com>
 * 
 */
class RESTClient {

    private $endpoint;
    private $account_type;
    private $api_key;
    private $api_url;

    public function __construct($api_key, $endpoint, $account_type) {
        $this->api_key = $api_key;
        $this->endpoint = $endpoint;
        $this->account_type = $account_type;
        if($this->account_type=='pro'){
          $this->api_url = "https://pro.rajaongkir.com/api/";
        }elseif($this->account_type=='basic'){
          $this->api_url = "https://api.rajaongkir.com/basic/";
        }elseif($this->account_type=='starter'){
          $this->api_url = "https://api.rajaongkir.com/starter/";
        }
    }

    /**
     * HTTP POST method
     * 
     * @param array Parameter yang dikirimkan
     * @return string Response dari cURL
     */
    function post($params) {
        $curl = curl_init();
        $header[] = "Content-Type: application/x-www-form-urlencoded";
        $header[] = "key: $this->api_key";
        $query = http_build_query($params);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_URL, $this->api_url . "/" . $this->endpoint);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $query);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        $request = curl_exec($curl);
        $return = ($request === FALSE) ? curl_error($curl) : $request;
        curl_close($curl);
        return $return;
    }

    /**
     * HTTP GET method
     * 
     * @param array Parameter yang dikirimkan
     * @return string Response dari cURL
     */
    function get($params) {
        $curl = curl_init();
        $header[] = "key: $this->api_key";
        $query = http_build_query($params);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_URL, $this->api_url . "/" . $this->endpoint . "?" . $query);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        $request = curl_exec($curl);
        $return = ($request === FALSE) ? curl_error($curl) : $request;
        curl_close($curl);
        return $return;
    }

}
