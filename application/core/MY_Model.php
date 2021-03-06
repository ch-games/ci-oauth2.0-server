<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	protected $_tableName = '';
	protected $_primaryKey = 'id';
	protected $_primaryFilter = 'intval';
	protected $_orderBy = 'id';
	public $rules = array();
	
	function __construct() {
		parent::__construct();
	}
	
	public function get($id = NULL, $single = FALSE){
		
		if ($id != NULL) {
			$filter = $this->_primaryFilter;
			$id = $filter($id);
			$this->db->where($this->_primaryKey, $id);
			$method = 'row';
		} elseif($single == TRUE) {
			$method = 'row';
		} else {
			$method = 'result';
		}
		
		if (!count($this->db->ar_orderby)) {
			$this->db->order_by($this->_orderBy);
		}
		return $this->db->get($this->_tableName)->$method();
	}
	
	public function get_by($where, $single = FALSE){
		$this->db->where($where);
		return $this->get(NULL, $single);
	}
	
	public function save($data, $id = NULL){
		
		if ($id === NULL) { // Insert
			!isset($data[$this->_primaryKey]) || $data[$this->_primaryKey] = NULL;
			$this->db
				->set($data)
				->insert($this->_tableName);
			$id = $this->db->insert_id();
		} else { // Update
			$filter = $this->_primaryFilter;
			$id = $filter($id);
			$this->db
				->set($data)
				->where($this->_primaryKey, $id)
				->update($this->_tableName);
		}
		
		return $id;
	}
	
	public function delete($id){
		$filter = $this->_primaryFilter;
		$id = $filter($id);
		
		if (!$id) {
			return FALSE;
		}
		$this->db
			->where($this->_primaryKey, $id)
			->limit(1)
			->delete($this->_tableName);
	}

	public function get_new()
	{
		return new_object(array('name'));
	}

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */