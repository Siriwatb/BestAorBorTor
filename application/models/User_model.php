<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	//row_array เอาแถวเดียว
	//result_array เอาทุกแถว
	//num_rows จำนวนแถว

	public function user_find($search = []) // ($search = ['user_name' => 'talktop' ,  'password'=>'123']
	{

		if (isset($search['username']) && isset($search['password'])) {
			$this->db->where('user.username', $search['username']);
			$this->db->where('user.password', $search['password']);
		}
		$query = $this->db->get('user');
		return $query->row_array();
	}
	public function user_create($data = [])
	{
		$this->db->trans_begin();

		$this->db->insert('user', $data);
		$id = $this->db->insert_id();

		$this->db->insert('user_permission', [
			'user_id' => $id,
			'permission_id' => $data["position"],
		]);

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}
	public function user_update($data)
	{
		$this->db->where('user_id', $data['user_id']);
		$this->db->update('user', $data);
	}
	public function user_data($search)
	{
		if ($search != null) {
			$this->db->like('user_name', $search);
			$this->db->or_like('user.u_surname', $search);
			$this->db->or_like('user.position', $search);
			$this->db->or_like('user.u_phone_number', $search);
			$this->db->or_like('user.gender', $search);
			// $this->db->or_like('user.position', $search);
			$this->db->or_like('branch.name_branch', $search);
		}
		$this->db->join('branch', 'user.branch_id = branch.branch_id');
		$query = $this->db->get('user');
		return $query->result_array();
	}
	public function user_delete($id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete('user');
	}
	public function user_data_by_id($id)
	{
		$this->db->where('user_id', $id);
		$query = $this->db->get('user');
		return $query->row_array();
	}
	public function user_data_by_name($Username)
	{
		$this->db->where('user_name', $Username);
		$query = $this->db->get('user');
		return $query->num_rows();
	}

	public function user_count_data()
	{
		$query = $this->db->get('user');
		return $query->num_rows();
	}

	public function teacher_list_for_create_information($search = [])
	{
		$this->db->select('
		user.user_id,
		user.title,
		user.u_name,
		user.u_surname,
		CONCAT(user.title," ",user.u_name," ",user.u_surname) AS full_name,
		branch.name_branch,
		user.u_phone_number,
		');
		if (isset($search['selectedBranch'])) {
			$this->db->where_in('user.branch_id', $search['selectedBranch']);
		}
		if (isset($search['teacherSelected'])) {
			$this->db->where_not_in('user.user_id', $search['teacherSelected']);
		}
		$this->db->where('user_permission.permission_id', 3);
		$this->db->join('user_permission', ' user.user_id = user_permission.user_id');
		$this->db->join('branch', 'branch.branch_id = user.branch_id');
		$query = $this->db->get('user');
		return $query->result_array();
	}
}
