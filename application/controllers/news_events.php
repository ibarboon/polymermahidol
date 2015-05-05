<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package	CodeIgniter
 */

require_once APPPATH . 'libraries/MY_Content_Controller.php';

class News_Events extends MY_Content_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->data['sub_view'] = ( $this->uri->segment( 4 ) ) ? 'blog_view' : 'blog_list_view';
		$this->load->view( $this->view , $this->data );
	}
}

/* End of file news_events.php */
/* Location: ./application/controllers/news_events.php */