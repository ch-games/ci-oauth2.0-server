<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Test_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
	}

	public function index()
	{
		
	}

}

/* End of file users.php */
/* Location: ./application/controllers/test/users.php */