<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		date_default_timezone_set('Asia/Bangkok');
		parent::__construct();
	}

	public function index()
	{
		var_dump($_SESSION['user']);
		if (isset($_SESSION['user'])) {
			redirect('admin/backoffice');
		} else {
			session_destroy();
			unset($_SESSION['user']);
			redirect(base_url());
			// redirect('auth/login_form');
		}
	}

	public function login()
	{
		header('Content-Type: application/json');
		check_parameter([
			'username',
			'password'
		], 'POST');
		$post = $this->input->post();
		$username = $post["username"];
		$password = $post["password"];
		$user  = $this->User_model->user_find([
			'username' => $username,
			'password' => $password
		]);

		if (!empty($user) && isset($user)) {
			echo "เข้าสู่ระบบสำเร็จ";
			// var_dump($user);
			$_SESSION['user'] = [
				'username' => $user['username'],
				'name' => $user['name'],
				'surname' => $user['surname'],

			];
			redirect('auth');
		} else {
			$this->session->set_flashdata('status', 'error');
			$this->session->set_flashdata('status_msg', 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
			// return redirect('auth/login_form');
			return redirect(base_url());
		}
	}

	public function logout()
	{
		session_destroy();
		unset($_SESSION['user']);
		$this->session->unset_userdata('user');
		redirect('auth');
	}


}
