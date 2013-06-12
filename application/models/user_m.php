<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_M extends MY_Model {

	protected $_tableName = 'users';

	public function hash($value='')
	{
		return $value;
	}

	public function login()
	{
		$user = $this->get_by(array(
			'email' => $this->input->post('email'),
			'password' => $this->hash($this->input->post('password'))
		), true);
		if (count($user)) {
			$this->login_user($user);
			return true;
		}
		return false;
	}

	public function login_user($user)
	{
		$array = array(
			'id' => $user->id,
			'email' => $user->email,
			'name' => $user->name,
			'loggedin' => TRUE,
		);
		$this->session->set_userdata( $array );
	}

	public function logout()
	{
		$this->session->sess_destroy();
	}

	public function loggedin()
	{
		return !!$this->session->userdata('loggedin');
	}
}

/* End of file user_m.php */
/* Location: ./application/models/user_m.php */