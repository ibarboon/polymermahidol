<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package	CodeIgniter
 */

require_once APPPATH . 'libraries/MY_Content_Controller.php';

class Research extends MY_Content_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$conditions = array('option_type' => 'nav_main_'.$this->data['current_language'],'option_key' => $this->uri->segment(2));
		$breadcrumb_array = $this->utility_model->select($conditions);
		$this->data['breadcrumb_list'] = array(0 => $breadcrumb_array[0]['option_value']);
		$conditions = array('content_language' => $this->uri->segment(1), 'content_type' => $this->uri->segment(2));
		$content_list = $this->contents_model->query_by_condition($conditions, 'content_alias_name');
		$this->data['content_list'] = $content_list;
		$this->data['sub_view'] = 'blog_full_width_view';
		$this->load->view($this->view,$this->data);
	}
	
}

/* End of file research.php */
/* Location: ./application/controllers/research.php */