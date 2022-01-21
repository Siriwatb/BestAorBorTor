<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories_model extends CI_Model
{
	//row_array เอาแถวเดียว
	//result_array เอาทุกแถว
	//num_rows จำนวนแถว

	public function categories_data()
	{
		$query = $this->db->get('category');
		return $query->result_array();
	}
}
