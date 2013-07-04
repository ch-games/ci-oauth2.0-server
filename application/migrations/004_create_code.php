<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_Code extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'client_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'null' => FALSE,
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'null' => FALSE,
			),
			'code' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
				'null' => FALSE,
			),
			'expire' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'null' => FALSE,
			),
		));
		$this->dbforge->add_key('id', true);
		$this->dbforge->add_key(array('user_id', 'client_id'));
		$this->dbforge->create_table('code');
	}

	public function down() {
		$this->dbforge->drop_table('code');
	}

}

/* End of file 004_create_code.php */
/* Location: ./application/migrations/004_create_code.php */