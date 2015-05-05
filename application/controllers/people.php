<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package	CodeIgniter
 */

require_once APPPATH . 'libraries/MY_Content_Controller.php';

class People extends MY_Content_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$conditions['content_language'] = $this->uri->segment(1);
		if ($this->uri->segment(4)) {
			$conditions['content_alias_name'] = $this->uri->segment(4);
			$this->data['sub_view'] = 'people_view';
		} else {
			$conditions['content_type'] = $this->uri->segment(3);
			$this->data['sub_view'] = 'people_list_view';
		}
		$content_list = $this->contents_model->query_by_condition($conditions, 'content_alias_name');
		$this->data['content_list'] = $content_list;
		$this->load->view($this->view,$this->data);
	}
	
}

/* End of file people.php */
/* Location: ./application/controllers/people.php */