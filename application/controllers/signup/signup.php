<?php if (!defined('BASEPATH')) exit('No direct Access allowed');


class Signup extends CI_Controller {
	
	public function index() {
		$data = array(
               'page' => 'signup'
          );
		$this->load->view('master_layer', $data);
	}
	
}
