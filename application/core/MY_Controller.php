<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package	CodeIgniter
 */

class MY_Controller extends CI_Controller {

	protected $data = array();
	protected $model = array();
	protected $view = '';
	
	public function __construct() {
		parent::__construct();
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */