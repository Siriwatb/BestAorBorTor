<?php
// require_once APPPATH.'../vendor/autoload.php';
// use \Curl\Curl;

function check_parameter($data, $request = "")
{
	$CI = &get_instance();
	if ($request == "POST") {
		check_post();
	}
	if ($CI->input->method() == "post") {
		$method = $CI->input->post();
	} else {
		$method = $CI->input->get();
	}
	foreach ($data as $key => $value) {
		if (!isset($method[$value])) {
			echo json_encode([
				'message' => 'request form-data',
				'error' => true
			]);
			exit();
		}
	}
}
function check_post()
{
	$CI = &get_instance();
	if ($CI->input->method() != "post") {
		echo json_encode([
			'message' => 'POST method',
			'error' => true
		]);
		exit();
	}
}

function checkPermission($menuPermission , $userPermission)
{
	$keys = array_column($userPermission, 'permission_id');
	$index = array_search($menuPermission, $keys);
	if ($index!==false) {
		return true;
	}else{
		return false;
	}
}

