<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applications extends Test_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('application_m');
	}

	public function index()
	{
		
	}

}

/* End of file applications.php */
/* Location: ./applications.php */