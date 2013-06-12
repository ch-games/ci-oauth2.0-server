<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function array_from_post($fields = array())
{
	$CI =& get_instance();
	$data = array();
	foreach ($fields as $field) {
		$data[$field] = $CI->input->post($field);
	}
	return $data;
}

function dd($value='')
{
	echo '<pre>';
	var_dump($value);
	echo '</pre>';
	die;
}

function is_post()
{
	return 'POST'===strtoupper($_SERVER['REQUEST_METHOD']);
}

function new_object($fields)
{
	$o = new stdClass();
	foreach ($fields as $field) {
		$o->$field = '';
	}
	return $o;
}

/* End of file my_helper.php */
/* Location: ./application/helpers/my_helper.php */