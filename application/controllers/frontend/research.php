<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Us extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->load->view('frontend/contact_us_view');
	}
}

/* End of file contact_us.php */
/* Location: ./application/controllers/frontend/contact_us.php */