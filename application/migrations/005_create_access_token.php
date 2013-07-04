<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_Access_Token extends CI_Migration {

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
			'user_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'null' => FALSE,
			),
			'client_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'null' => FALSE,
			),
			'session_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 40,
				'null' => FALSE,
			),
			'access_token' => array(
				'type' => 'VARCHAR',
				'constraint' => '32',
				'null' => FALSE,
			),
			'expire' => array(
				'type' => 'INT',
				'constraint' => 11,
				'null' => FALSE,
			),
		));
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('access_token');
	}

	public function down() {
		$this->dbforge->drop_table('access_token');
	}

}

/* End of file 003_create_access_token.php */
/* Location: ./application/migrations/003_create_access_token.php */