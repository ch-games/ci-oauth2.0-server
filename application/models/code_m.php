<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Code_M extends MY_Model {

	protected $_tableName = 'code';

	public function generate_code()
	{
		do{
			$code = time();

			while (strlen($code) < 32) {
				$code .= mt_rand(0, 9654);
			}

			$code .= $this->input->ip_address();

			$code = md5(uniqid($code, true));

			$record = $this->get_by(array('code' => $code), true);
		} while(count($record));
		
		return $code;
	}
}

/* End of file code_m.php */
/* Location: ./application/models/code_m.php */