<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_Us extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$option = array('option_type' => 'html_meta');
		$params['html_meta_list'] = $this->utility_model->get_option_list($option);
		$option = array('option_type' => 'default_language');
		$params['current_language'] = $this->uri->segment(1);
		if (! $this->uri->segment(1)) {
			$row = $this->utility_model->get_option($option);
			$params['current_language'] = $row['option_value'];
		}
		$params['current_page'] = ($this->uri->segment(2))? $this->uri->segment(2): 'about-us';
		$option = array('option_type' => 'nav_top_'.$params['current_language']);
		$params['nav_top_list'] = $this->utility_model->get_option_list($option);
		$option = array(
			'option_type' => 'nav_main_'.$params['current_language'],
			'parent_id' => 0	
		);
		$params['nav_main_list'] = $this->utility_model->get_option_list($option);
		foreach ($params['nav_main_list'] as $key => $value) {
			$option = array(
				'option_type' => 'nav_main_'.$params['current_language'],
				'parent_id' => $value['row_id']	
			);
			$params['nav_main_list'][$key]['dropdown_list'] = $this->utility_model->get_option_list($option);
		}
		$option = array('option_type' => 'contact_us_'.$params['current_language']);
		$params['contact_us_list'] = $this->utility_model->get_option_list($option);
		$option = array('option_type' => 'social_network');
		$params['social_network_list'] = $this->utility_model->get_option_list($option);
		$this->load->view('header_view', $params);
		$this->load->view('about_us_view', $params);
		$this->load->view('footer_view', $params);
// 		echo '<pre>';
// 		print_r($params);
// 		echo '</pre>';
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

/* End of file about_us.php */
/* Location: ./application/controllers/about_us.php */