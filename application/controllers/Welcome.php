<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function province(){
		$provinces = $this->rajaongkir->province(); // output json
		print_r($provinces);
	}
  
  public function city(){
		$cities = $this->rajaongkir->city(); // output json
		print_r($cities);
	}
  
  public function subdistrict(){
		$subdistrict = $this->rajaongkir->subdistrict(151); // output json
		print_r($subdistrict);
	}
  
  public function cost(){
		$cost = $this->rajaongkir->cost(501, 114, 1000, "jne"); // output json
		print_r($cost);
	}
  
}
