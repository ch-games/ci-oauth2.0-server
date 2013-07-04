<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applications extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->request_login();
		$this->load->model('application_m');
	}

	public function index()
	{
		$this->data['applications'] = $this->application_m->get_by(array(
			'owner_id' => $this->session->userdata('id')
		));
		$this->data['subview'] = 'applications/index';
		$this->load->view('layout_main', $this->data);
	}

	public function edit($id=null)
	{
		if (is_post()) {
			$data = array_from_post(array('name'));
			if ($id) {
				$application = $this->application_m->get($id);
				//TODO:check access
				if ($application->owner_id!=$this->session->userdata('id')) {
					show_error('You dont have access to this app.');
				}
				$this->db->where('id != ', $id);
				$applications = $this->application_m->get_by(array('name' => $this->input->post('name')));
				if (count($applications)) {
					show_error('application with that name do exist');
				}
			} else {
				do{
					$data['client_id'] = $this->_generate_key();
					$exist = count($this->application_m->get_by(array('client_id' => $data['client_id']), true));
				} while ($exist);
				$data['client_secret'] = $this->_generate_secret();
				$data['owner_id'] = $this->session->userdata('id');
			}
			$this->application_m->save($data, $id);
			redirect('applications/index');
		}
		if (null==$id) {
			$this->data['application'] = $this->application_m->get_new();
		} else {
			$this->data['application'] = $this->application_m->get($id);
		}
		$this->load->helper('form');
		$this->data['subview'] = 'applications/edit';
		$this->load->view('layout_main', $this->data);
	}

	public function detail($id)
	{
		$this->data['application'] = $this->application_m->get($id);
		if (empty($this->data['application'])) {
			show_error('Application Not Found');
		}
		if ($this->data['application']->owner_id!=$this->session->userdata('id')) {
			show_error('You have no access to this app.');
		}
		$this->data['subview'] = 'applications/detail';
		$this->load->view('layout_main', $this->data);
	}

	public function delete($id)
	{
		$this->application_m->delete($id);
		redirect('applications/index');
	}

	public function reset_secret($id)
	{
		$application = $this->application_m->get($id);
		//TODO: check access
		$data['secret'] = $this->_generate_secret();
		$this->application_m->save($data, $id);

	}

	public function _generate_key()
	{
		return md5(time() . mt_rand(1000, 9999) . config_item('encryption_key'));
	}

	private function _generate_secret()
	{
		return md5(time() . mt_rand(0, 999) . config_item('encryption_key'));
	}

}

/* End of file applications.php */
/* Location: ./applications.php */