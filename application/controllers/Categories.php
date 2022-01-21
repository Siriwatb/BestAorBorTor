<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

	public function __construct()
	{
		date_default_timezone_set('Asia/Bangkok');
		parent::__construct();
	}

	public function index()
	{
		$data['pageName'] = 'ตารางข้อมูลประเภทสถานที่';
		$data['content'] = 'backoffice/categories/category_tables';
		$data['cate'] = $this->Categories_model->categories_data();
		$this->load->view('backoffice/main', $data);
	}

	public function category_create_form()
	{
		# code...
	}

	public function category_create()
	{
		# code...
	}

	public function category_update_form()
	{
		# code...
	}

	public function category_update()
	{
		# code...
	}

	public function category_delete()
	{
		# code...
	}
}
