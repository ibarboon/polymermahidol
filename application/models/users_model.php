<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_Model extends MY_Model {

	protected $column_name = 'row_id, parent_id, option_type, option_key, option_value';
	protected $table_name = 'tbl_options';
	protected $order_by = 'option_sequence';
	
	public function __construct() {
		parent::__construct();
	} /* method : __construct*/
	
	public function query_by_condition($conditions = NULL, $order_by = NULL) {
		$sql = "select * ";
		$sql .= "from tbl_contents ";
		$sql .= "where 1 = 1 ";
		if (!is_null($conditions)) {
			foreach ($conditions as $column_name => $column_value) {
				$sql .= "and $column_name = ? ";
			}
		}
		if (is_null($order_by)) {
			$sql .= "order by option_sequence asc";
		} else {
			$sql .= "order by $order_by asc";
		}
		$query = $this->db->query($sql, $conditions);
		return $query->result_array();
	}
	
}

/* End of file users_model.php */
/* Location: ./application/models/users_model.php */