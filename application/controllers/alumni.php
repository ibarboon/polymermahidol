<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package	CodeIgniter
 */

require_once APPPATH . 'libraries/MY_Content_Controller.php';

class Alumni extends MY_Content_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$content_list = array();
		foreach ( $this->data['content_list'] as $content_key => $content_value ) {
			$detail = explode( '|' , $content_value['content_body'] );
			$content_list[$content_value['content_header']][$content_key] = array(
				'year' => $detail[0],
				'name' => $detail[1]
			);
			$year[$content_key] = $content_list[$content_value['content_header']][$content_key]['year'];
			$name[$content_key] = $content_list[$content_value['content_header']][$content_key]['year'];
		}
// 		array_multisort($year,SORT_DESC,$name,SORT_ASC,$content_list[$content_value['content_header']]);
		$this->data['content_list'] = $content_list;
// 		echo '<pre>';
// 		print_r( $this->data );
// 		echo '</pre>';
		$this->data['sub_view'] = 'alumni_view';
		$this->load->view( $this->view , $this->data );
	}
	
}

/* End of file alumni.php */
/* Location: ./application/controllers/alumni.php */