<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
	}

	public function index()
	{
		$this->data['subview'] = 'users/index';
		$this->load->view('layout_main', $this->data);
	}

	public function login()
	{
		if (is_post()) {
			if ($this->user_m->login()) {
				redirect('applications/index');
			}
			show_error('帐号或密码错误');
		}
		$this->load->helper('form');
		$this->data['subview'] = 'users/login';
		$this->load->view('layout_modal', $this->data);
	}

	public function logout()
	{
		$this->user_m->logout();
		redirect('users/login');
	}

	public function register()
	{
		if (is_post()) {
			$data = array_from_post(array('email', 'password', 'screen_name'));
			$data['password'] =$this->user_m->hash($data['password']);
			$data['id'] = $this->user_m->save($data);
			$user = (object) $data;
			$this->user_m->login_user($user);
			redirect('applications/index');
		}
		$this->load->helper('form');
		$this->data['subview'] = 'users/register';
		$this->load->view('layout_modal', $this->data);
	}

}

/* End of file users.php */
/* Location: ./application/controllers/users.php */