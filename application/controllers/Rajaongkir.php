<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rajaongkir extends CI_Controller {

  // http://example.com/rajaongkir/province
	public function province(){
		$provinces = $this->rajaongkir->province(); // output json
		print_r($provinces);
	}
  
  // http://example.com/rajaongkir/city
  public function city(){
		$cities = $this->rajaongkir->city(); // output json
		print_r($cities);
	}
  
  // http://example.com/rajaongkir/subdistrict
  public function subdistrict(){
		$subdistrict = $this->rajaongkir->subdistrict(151); // output json
		print_r($subdistrict);
	}
  
  // http://example.com/rajaongkir/cost
  public function cost(){
		$cost = $this->rajaongkir->cost(501, 114, 1000, "jne"); // output json
		print_r($cost);
	}
  
}
