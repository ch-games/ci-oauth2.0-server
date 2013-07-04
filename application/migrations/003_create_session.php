<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_Session extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() 
	{
	    $this->dbforge->add_field(array(
		    'session_id VARCHAR(40) DEFAULT \'0\' NOT NULL',
		    'ip_address VARCHAR(45) DEFAULT \'0\' NOT NULL',
		    'user_agent VARCHAR(120) NOT NULL',
		    'last_activity INT(10) unsigned DEFAULT 0 NOT NULL',
		    'user_data text NOT NULL'
	    ));
	    $this->dbforge->add_key('session_id', TRUE);
	    $this->dbforge->create_table('sessions');
		$this->db->query('ALTER TABLE `sessions` ADD KEY `last_activity_idx` (`last_activity`)');  
  	}

  	public function down()
  	{
    	$this->dbforge->drop_table('sessions');
  	}
}

/* End of file 003_create_session.php */
/* Location: ./application/migrations/003_create_session.php */