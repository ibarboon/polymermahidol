<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package	CodeIgniter
 */

require_once APPPATH . 'libraries/MY_Content_Controller.php';

class About_Us extends MY_Content_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->data['sub_view'] =  ( $this->uri->segment( 3 ) === 'contact-us' ) ? 'contact_us_view' : 'content_view';
		$this->load->view( $this->view , $this->data );
	}
	
	public function do_send_mail() {
		$this->load->library('email');
		$option = array(
			'option_type' => 'contact_us_'.$this->uri->segment(1),
			'option_key' => ($this->uri->segment(1) === 'en')? 'email': 'อีเมล์'
		);
		$row = $this->utility_model->get_option($option);
		$email_to = explode('|', $row['option_value']);
		$this->email->from($this->input->post('input-email'), $this->input->post('input-name'));
		$this->email->to($email_to[1]);
		
		$this->email->subject($this->input->post('input-subject'));
		$this->email->message($this->input->post('input-message'));
		echo $this->email->send();
	}
}

/* End of file about_us.php */
/* Location: ./application/controllers/about_us.php */