<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
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
		$params['current_page'] = ($this->uri->segment(2))? $this->uri->segment(2): 'home';
		$option = array('option_type' => 'nav_top_'.$params['current_language']);
		$params['nav_top_list'] = $this->utility_model->get_option_list($option);
		$option = array(
			'option_type' => 'nav_main_'.$params['current_language'],
			'parent_id' => 0,
			'active_flag' => 'y'	
		);
		$params['nav_main_list'] = $this->utility_model->get_option_list($option);
		foreach ($params['nav_main_list'] as $key => $value) {
			$option = array(
				'option_type' => 'nav_main_'.$params['current_language'],
				'parent_id' => $value['row_id'],
				'active_flag' => 'y'	
			);
			$params['nav_main_list'][$key]['dropdown_list'] = $this->utility_model->get_option_list($option);
		}
		$option = array('option_type' => 'contact_us_'.$params['current_language']);
		$params['contact_us_list'] = $this->utility_model->get_option_list($option);
		$option = array('option_type' => 'social_network');
		$params['social_network_list'] = $this->utility_model->get_option_list($option);
		$this->load->view('header_view', $params);
		$this->load->view('home_view', $params);
		$this->load->view('footer_view', $params);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */