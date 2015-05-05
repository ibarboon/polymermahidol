<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package	CodeIgniter
 */

class MY_Content_Controller extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		/* get : language */
		if ( $this->uri->segment(1) ) {
			$this->data['current_language'] = $this->uri->segment(1);
		} else {
			$conditions = array( 'option_type' => 'default_language' , 'active_flag' => 'y' );
			$language = $this->utility_model->select( $conditions );
			$this->data['current_language'] = $language[0]['option_value'];
		}
		/* get : page */
		$this->data['current_page'] = ( $this->uri->segment( 2 ) ) ? $this->uri->segment( 2 ) : 'home';
		/* get : title , title [ keywords , description , author ] */
		$conditions = array( 'option_type' => 'html_meta' , 'active_flag' => 'y' );
		$this->data['html_meta_list'] = $this->utility_model->select( $conditions );
		/* get : nav_top */
		$conditions = array( 'option_type' => 'nav_top_' . $this->data['current_language'] , 'parent_id' => 0 , 'active_flag' => 'y' );
		$this->data['nav_top_list'] = $this->utility_model->select( $conditions );
		/* get : nav_main */
		$conditions = array( 'option_type' => 'nav_main_' . $this->data['current_language'] , 'parent_id' => 0 , 'active_flag' => 'y' );
		$nav_main_array = $this->utility_model->select( $conditions );
		foreach ( $nav_main_array as $nav_main_key => $nav_main_value ) {
			$conditions = array( 'option_type' => 'nav_main_' . $this->data['current_language'] , 'parent_id' => $nav_main_value['row_id'] , 'active_flag' => 'y' );
			$nav_main_array[$nav_main_key]['dropdown_list'] = $this->utility_model->select( $conditions );
		}
		$this->data['nav_main_list'] = $nav_main_array;
		/* get : breadcrumb */
		$breadcrumb_array[] = $this->data['current_page'];
		if ( $this->data['current_page'] === 'alumni' 
			OR $this->data['current_page'] === 'student-life' ) {
			$this->data['content_alias_name'] = $this->data['current_page'];
			$this->data['breadcrumb_list'][] = $breadcrumb_array[0];
		} else {
			$breadcrumb_array[] = $this->uri->segment( 3 );
			$this->data['content_alias_name'] = ( $this->uri->segment( 3 ) ) ? $this->uri->segment( 3 ) : NULL;
			foreach ($breadcrumb_array as $breadcrumb_key => $breadcrumb_value) {
				$conditions = array( 'option_type' => 'nav_main_' . $this->data['current_language'] , 'option_key' => $breadcrumb_value );
				$breadcrumb = $this->utility_model->select( $conditions );
				if ( count($breadcrumb) > 0 ) {
					$this->data['breadcrumb_list'][$breadcrumb_value] = $breadcrumb[0]['option_value'];
				}
			}
		}
		/* get : content */
		$conditions = array( 'content_alias_name' => $this->data['content_alias_name'] , 'content_language' => $this->data['current_language'] );
		$content = $this->contents_model->select( $conditions );
		if ( count( $content ) > 0 ) {
			$this->data['content_list'] = $content;
		}
		/* get : side bar */
		$conditions = array( 'option_type' => 'nav_main_' . $this->data['current_language'] , 'option_key' => $this->data['current_page'] , 'active_flag' => 'y' );
		$par_nav_list = $this->utility_model->select( $conditions );
		if ( count( $par_nav_list ) > 0 ) {
			$conditions = array( 'option_type' => 'nav_main_' . $this->data['current_language'] , 'parent_id' => $par_nav_list[0]['row_id'] , 'active_flag' => 'y' );
			$this->data['nav_list'] = $this->utility_model->select( $conditions );
		}
		/* get : contact_us */
		$conditions = array( 'option_type' => 'contact_us_' . $this->data['current_language'] , 'active_flag' => 'y' );
		$this->data['contact_us_list'] = $this->utility_model->select( $conditions );
		/* get : contact_us */
		$conditions = array( 'option_type' => 'social_network' , 'active_flag' => 'y' );
		$this->data['social_network_list'] = $this->utility_model->select( $conditions );
		/* get : history */
		$conditions = array( 'content_alias_name' => 'history' , 'content_language' => $this->data['current_language'] );
		$history = $this->contents_model->select( $conditions );
		$this->data['history'] = $history[0];
		/* set : view */
		$this->view = '_content';
		$change_language = array('en' => 'en','th' => 'th');
		foreach ($this->uri->segment_array() as $n => $segment) {
			if ((int)$n !== 1) {
				$change_language['en'] .= "/$segment";
				$change_language['th'] .= "/$segment";
			}
		}
		$this->data['change_language'] = $change_language;
	}
}

/* End of file MY_Content_Controller.php */
/* Location: ./application/libraries/MY_Content_Controller.php */