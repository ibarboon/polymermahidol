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
		
		$params['content_alias_name'] = ($this->uri->segment(3))? $this->uri->segment(3): NULL;
		$content = array(
				'content_alias_name' => $params['content_alias_name'],
				'content_language' => $params['current_language']
		);
		$params['content'] = $this->contents_model->get_content($content);
		$tmp_breadcrumb_list = array($params['current_page'], $params['content_alias_name']);
		foreach ($tmp_breadcrumb_list as $tmp_breadcrumb) {
			$option = array(
				'option_type' => 'nav_main_'.$params['current_language'],
				'option_key' => $tmp_breadcrumb
			);
			$row = $this->utility_model->get_option($option);
			$params['breadcrumb_list'][$tmp_breadcrumb] = $row['option_value'];
		}
		
		$content = array(
				'content_alias_name' => 'history',
				'content_language' => $params['current_language']
		);
		$params['history'] = $this->contents_model->get_content($content);
		
		$this->load->view('header_view', $params);
		$view = ($params['content_alias_name'] === 'contact-us')? 'contact_us_view': 'content_view';
		$this->load->view($view, $params);
		$this->load->view('footer_view', $params);
// 		echo "<pre>";
// 		print_r($params['breadcrumb_list']);
// 		echo "</pre>";
	}
	
	public function do_send_mail() {
		$this->load->library('email');
		
		$this->email->from($this->input->post('input-email'), $this->input->post('input-name'));
		$this->email->to('wiboons@outlook.com');
		
		$this->email->subject($this->input->post('input-subject'));
		$this->email->message($this->input->post('input-message'));
		
		echo $this->email->send();
	}
}

/* End of file about_us.php */
/* Location: ./application/controllers/about_us.php */