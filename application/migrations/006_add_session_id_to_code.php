<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_Session_Id_To_Code extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$this->dbforge->add_column('code', array(
			'session_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 40,
				'null' => FALSE,
			),
		));
	}

	public function down() {
		$this->dbforge->drop_column('code', 'session_id');
	}

}

/* End of file 006_add_session_id_to_code.php */
/* Location: ./application/migrations/006_add_session_id_to_code.php */