<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_M extends MY_Model {

	protected $_tableName = 'users';

	public function hash($value='')
	{
		return md5(md5($value . config_item('encrption_key')));
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
			'name' => $user->screen_name,
			'loggedin' => TRUE,
		);
		$this->session->set_userdata( $array );
		$CI =& get_instance();
		$CI->data['loginedUser'] = $array;
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