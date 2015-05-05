<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package	CodeIgniter
 */

require_once APPPATH . 'libraries/MY_Content_Controller.php';

class CRU extends MY_Content_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->data['sub_view'] = 'home_view';
		$this->load->view( $this->view , $this->data );
	}
	
}

/* End of file cru.php */
/* Location: ./application/controllers/cru.php */