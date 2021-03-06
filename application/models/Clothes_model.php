<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Clothes_factory.php');
class Clothes_model extends CI_Model implements Clothes_factory{
	
	public function createClothes() {
		$this->db->order_by('Id', 'AESC');
		$query = $this->db->get('clothes');
		foreach ($query->result() as $row)
		{
			$data[] = array( 
				'Id'                => $row->Id,
				'CollectionType'    => $row->CollectionType,
				'Type'              => $row->Type,
				'Name'              => $row->Name,
				'Price'             => $row->Price,
				'Number'            => $row->Number,
				'product_image'     => $row->product_image
			);
		}
		//var_dump($data); // debug code
		return $data;
	}

	public function insert($data){
		$query = $this->db->get('userdb');
		foreach ($query->result() as $row){

			$user   = array(
				'notify'	=> $row->notify+1,
			);
			$this->db->where('id', $row->id);
			$this->db->update('userdb',$user);
		}

		return $this->db->insert('clothes', $data);
	}


	public function get_data($id)
	{
		$this->db->where('Id', $id);
		$query = $this->db->get('clothes');

		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			$data[] = array(
				'Id'                => $row->Id,
				'CollectionType'    => $row->CollectionType,
				'Type'              => $row->Type,
				'Name'              => $row->Name,
				'Price'             => $row->Price,
				'Number'            => $row->Number,
				'product_image'		=> $row->product_image
			);
			return $data;
		}
	}
	
	public function update_data($id, $data){
		$this->db->where('Id', $id);
		$this->db->update('clothes', $data);
	}
	public function delete_data($id){
		$this->db->where('Id', $id);
		$this->db->delete('clothes');
	}
}

