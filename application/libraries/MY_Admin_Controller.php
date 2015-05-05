<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package	CodeIgniter
 */

class MY_Admin_Controller extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$exception_uri_string = array('admin/users/signin','admin/users/signout');
		if (in_array(uri_string(), $exception_uri_string) === FALSE) {
			if ((bool)$this->session->userdata('signin') === FALSE) {
				redirect('admin/users/signin','refresh');
			}
		}
		$this->data['title'] = 'Polymer Science and Technology';
		$this->data['css_list'] = array('bootstrap.min.css','sb-admin.css');
		$this->data['js_list'] = array('jquery.js','bootstrap.min.js');
	}
}

/* End of file MY_Admin_Controller.php */
/* Location: ./application/libraries/MY_Admin_Controller.php */