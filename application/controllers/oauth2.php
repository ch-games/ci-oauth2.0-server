<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oauth2 extends Frontend_Controller {
	public $data = array();
	public function __construct()
	{
		parent::__construct();
		$this->load->model('application_m');
	}

	public function authorize()
	{
		// request check
		if (empty($_GET['client_id'])||empty($_GET['redirect_uri'])||empty($_GET['response_type'])) {
			show_error('invalid_request');
		}
		if ('code'!==$this->input->get('response_type')) {
			show_error('unsupported_response_type');
		}
		$clientId = $this->input->get('client_id');
		$client = $this->application_m->get_by(array('client_id' => $clientId), true);
		if (empty($client)) {
			show_error('invalid_client');
		}

		$this->load->model('user_m');
		if (is_post()) {
			if ($this->user_m->loggedin()) {
				//user has logged in.
				if ('agree'==$this->input->post('agree')) {
					// agree to connect.
					// generate code
					// redirect
				} else {
					// disagree to connect. redirect
				}
			} else {
				// try login.
				$this->user_m->login();
			}
		}
		$this->load->helper('form');

		if ($this->user_m->loggedin()) {
			// user has logined.
			// show authorize page.
			$this->data['client'] = $client;
			$this->data['subview'] = 'oauth2/authorize_agree';
		} else {
			$this->data['subview'] = 'oauth2/authorize';
		}
		$this->load->view('layout_modal', $this->data);
	}

	public function access_token()
	{
		
	}

}

/* End of file oauth2.php */
/* Location: ./application/controllers/oauth2.php */