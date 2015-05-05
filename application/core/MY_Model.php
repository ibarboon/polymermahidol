<?php
class MY_Model extends CI_Model {
	
	protected $column_name = '';
	protected $table_name = '';
	protected $order_by = '';
	
	public function __construct() {
		parent::__construct();
	}

// 	public function insert( $data ) { }
	
	public function select( $conditions = NULL ) {
		$this->db->select( $this->column_name );
		if ( ! is_null( $conditions ) ) {
			foreach ( $conditions as $column_name => $column_value ) {
				$this->db->where( $column_name , $column_value );
			}
		}
		if (is_array($this->order_by)) {
			$this->db->order_by( $this->order_by[0] , $this->order_by[1] );
		} else {
			$this->db->order_by( $this->order_by );
		}
		$query = $this->db->get( $this->table_name );
		return $query->result_array();
	}
	
// 	public function update($data, $conditions) { }
	
// 	public function delete($conditions) { }
}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */