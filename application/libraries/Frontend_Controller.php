<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class Frontend_Controller extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();

		$this->data['appName'] = config_item('app_name');
		$this->data['loginedUser'] = $this->session->all_userdata();
	}

	public function request_login()
	{
		if ($this->user_m->loggedin()) {
			return;
		}
		redirect('users/login');
	}

}

/* End of file Frontend_Controller.php */
/* Location: ./application/libraries/Frontend_Controller.php */