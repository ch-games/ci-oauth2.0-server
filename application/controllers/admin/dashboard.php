<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function index()
	{
		$this->data['subview'] = 'admin/dashboard/index';
		$this->load->view('admin/layout_main', $this->data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */