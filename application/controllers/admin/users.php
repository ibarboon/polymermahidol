<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package	CodeIgniter
 */

require_once APPPATH . 'libraries/MY_Admin_Controller.php';

class Users extends MY_Admin_Controller {

	
	function __construct() {
		parent::__construct();
	}
	
	public function index() {
		//
	}
		
	public function signin() {
// 		$rules = array(
// 			array(
// 				'field'   => 'input-username',
// 				'label'   => 'Username',
// 				'rules'   => 'trim|required|xss_clean'
// 			),
// 			array(
// 				'field'   => 'input-password',
// 				'label'   => 'Passwrord',
// 				'rules'   => 'trim|required|xss_clean'
// 			)
// 		);
// 		$this->form_validation->set_rules($rules);
// 		if ($this->form_validation->run() === TRUE) {
// 			$conditions = array(
// 				'user_signin' => $this->input->post('input-username'),
// 				'user_password' => hash('sha512', $this->input->post('input-password')),
// 				'active_flag' => 'y'
// 			);
// 			$this->load->model('users_model');
// 			$user = $this->users_model->get_user($conditions);
// 			if (count($user) > 0) {
// 				$user[0]['signin'] = TRUE;
// 				$this->session->set_userdata($user[0]);
// 				redirect('admin/dashboard', 'refresh');
// 			}
// 			$this->session->set_flashdata('error_message', '<div class="alert alert-danger"><strong>Error!</strong> The username or password you entered is incorrect.</div>');
// 			redirect('admin/signin', 'refresh');
// 		}
		$this->data['title'] .= ' - Sing in';
		$this->data['error_message'] = ($this->session->flashdata('error_message') === FALSE) ? NULL : $this->session->flashdata('error_message');
		$this->load->view('signin_view', $this->data);
	}
	
	public function signout() {
		$this->session->sess_destroy();
		redirect('admin/users/signin', 'refresh');
	}
}

/* End of file users.php */
/* Location: ./application/controllers/admin/users.php */