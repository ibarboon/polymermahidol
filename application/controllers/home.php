<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package	CodeIgniter
 */

require_once APPPATH . 'libraries/MY_Content_Controller.php';

class Home extends MY_Content_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$conditions = array('option_type' => 'home_slider','active_flag' => 'y');
		$this->data['slider_list'] = $this->utility_model->select($conditions);
		$conditions = array('content_alias_name' => 'doctor-of-philosophy-in-polymer-science-and-technology','content_language' => $this->data['current_language']);
		$content_array = $this->contents_model->select($conditions);
		if (count($content_array) > 0) {
			$this->data['doctor'] = $content_array[0];
		}
		$conditions = array('content_alias_name' => 'master-of-science-in-polymer-science-and-technology','content_language' => $this->data['current_language']);
		$content_array = $this->contents_model->select($conditions);
		if (count($content_array) > 0) {
			$this->data['master'] = $content_array[0];
		}
// 		echo '<pre>';
// 		print_r($programs);
// 		echo '</pre>';
		$this->data['sub_view'] = 'home_view';
		$this->load->view($this->view,$this->data);
	}
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */