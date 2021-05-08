<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mycollection_model extends CI_Model {

    public function insertName($data){
		return $this->db->insert('mycollection', $data);
	}

	public function insertData($data){
		return $this->db->insert('collectionuser', $data);
	}
	public function get_id($uid)
	{
		$this->db->order_by('id', 'DESC');
		$this->db->where('uid', $uid);
		$query = $this->db->get('mycollection');
		if ($query->num_rows() > 0){
			$row = $query->row();
			return $row->id;
		}
	}
}