<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		date_default_timezone_set('Asia/Bangkok');
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('home/home');
	}


}