<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->load->view('frontend/home_view');
	}

	public function programs() {
		if ($this->uri->segment(2) === 'doctor-of-philosophy-in-polymer-science-and-technology') {
			$this->load->view('frontend/doctor_view');
		}
		if ($this->uri->segment(2) === 'master-of-science-in-polymer-science-and-technology') {
			$this->load->view('frontend/master_view');
		}
	}
	
	public function research() {
		$this->load->view('frontend/research_view');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/frontend/home.php */