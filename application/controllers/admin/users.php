<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
	}

	public function index()
	{
		$this->data['users'] = $this->user_m->get();
		$this->data['subview'] = 'admin/users/index';
		$this->load->view('admin/layout_main', $this->data);
	}

}

/* End of file users.php */
/* Location: ./application/controllers/admin/users.php */