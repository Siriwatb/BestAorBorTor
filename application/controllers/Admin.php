<?php 

class Admin extends CI_Controller{
	public function __construct()
	{
		date_default_timezone_set('Asia/Bangkok');
		parent::__construct();
		// $this->check_login();
	}
	
	public function index()
	{
		var_dump($_SESSION['user']);
		if (isset($_SESSION['user'])) {
			redirect('admin/backoffice_dashboard');
		} else {
			session_destroy();
			unset($_SESSION['user']);
			redirect('auth/login_form');
		}
	}

	private function check_login()
	{
		if (!isset($_SESSION['user'])) {
			session_destroy();
			redirect('auth');
			exit();
		}
	}

	public function backoffice()
	{
		$data['pageName'] = 'Dashboard';
		$data['content'] = 'backoffice/blank_page';
		// $data['script'] = base_url('/assets/script/dashboard/dashboard.js');
		// $data['count_school'] = $this->School_model->school_count_data();
		// $data['count_user'] = $this->User_model->user_count_data();
		// $data['inform_avg'] = $this->Information_model->information_avg_school();
		// $data['inform_count'] = $this->Information_model->information_count();
		$this->load->view('backoffice/main', $data);
	}
}
