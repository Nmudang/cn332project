<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
	// insert user
	public function insert_user($data){
		return $this->db->insert('userdb', $data);
	}
	// get user
	function get_user($id){
		$this->db->where('id',$id);
		$query = $this->db->get('userdb');
		foreach ($query->result() as $row)
		{
			$data['user'][] = array(
				'id'        => $row->id,
				'firstname'      => $row->firstname,
				'lastname'   => $row->lastname,
				'email'     => $row->email,
				'password'     => $row->password
			);
		}
		//var_dump($data); // debug code
		return $data;
	}

	function get_user_all() {
		$this->db->order_by('id','ASC');
		$query = $this->db->get('userdb');
		foreach ($query->result() as $row)
		{
			$data['user'][] = array(
				'id'        => $row->id,
				'firstname' => $row->firstname,
				'lastname'  => $row->lastname,
				'email'     => $row->email,
				'password'  => $row->password
			);
		}
		//var_dump($data); // debug code
		return $data;
	}
	public function insert_data($data){
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
		return ($this->db->insert('userdb', $data));

	}

	public function checkadmin($id){
		$this->db->where('id',$id);
		$query = $this->db->get('userdb');

		if($query->num_rows() > 0) {
			$row = $query->row();
			if($row->admin == 1){
				return TRUE;
			}
		}
		return FALSE;
	}

	public function login($username, $password){
		// find username
		$this->db->where('username', $username);
		$query = $this->db->get('userdb');
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$hash = $row->password;
			if (password_verify($password, $hash)) {
				return $row->id;}
		}
		return FALSE;
	}
}
