<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applications extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('application_m');
	}

	public function index()
	{
		$this->data['applications'] = $this->application_m->get();
		$this->data['subview'] = 'applications/index';
		$this->load->view('admin/layout_main', $this->data);
	}

}

/* End of file applications.php */
/* Location: ./applications.php */