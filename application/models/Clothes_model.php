<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clothes_model extends CI_Model {

    function get_data()
	{
		$this->db->order_by('Id', 'AESC');
		$query = $this->db->get('clothes');
		foreach ($query->result() as $row)
		{
			$data['clothes'][] = array( 
				'Id'                => $row->Id,
				'CollectionType'    => $row->CollectionType,
				'Type'              => $row->Type,
				'Name'              => $row->Name,
				'Price'             => $row->Price,
				'Number'            => $row->Number
			);
		}
		//var_dump($data); // debug code
		return $data;
	}
	function get_1data()
	{
		$this->db->order_by('Id', 'AESC');
		$this->db->where('Type', "shirts");
		$query = $this->db->get('clothes');
		foreach ($query->result() as $row)
		{
			$data['clothes'][] = array( 
				'Id'                => $row->Id,
				'CollectionType'    => $row->CollectionType,
				'Type'              => $row->Type,
				'Name'              => $row->Name,
				'Price'             => $row->Price,
				'Number'            => $row->Number
			);
		}
		//var_dump($data); // debug code
		return $data;
	}
	function get_2data()
	{
		$this->db->order_by('Id', 'AESC');
		$this->db->where('Type', "dress");
		$query = $this->db->get('clothes');
		foreach ($query->result() as $row)
		{
			$data['clothes'][] = array( 
				'Id'                => $row->Id,
				'CollectionType'    => $row->CollectionType,
				'Type'              => $row->Type,
				'Name'              => $row->Name,
				'Price'             => $row->Price,
				'Number'            => $row->Number
			);
		}
		//var_dump($data); // debug code
		return $data;
	}
	function get_3data()
	{
		$this->db->order_by('Id', 'AESC');
		$this->db->where('Type', "trousers");
		$query = $this->db->get('clothes');
		foreach ($query->result() as $row)
		{
			$data['clothes'][] = array( 
				'Id'                => $row->Id,
				'CollectionType'    => $row->CollectionType,
				'Type'              => $row->Type,
				'Name'              => $row->Name,
				'Price'             => $row->Price,
				'Number'            => $row->Number
			);
		}
		//var_dump($data); // debug code
		return $data;
	}
    public function insert_data($data){
		return $this->db->insert('clothes', $data);
	}
	public function get_data1($id)
	{
		$this->db->where('Id', $id);
		$query = $this->db->get('clothes');

		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			$data = array(
				'Id'                => $row->Id,
				'CollectionType'    => $row->CollectionType,
				'Type'              => $row->Type,
				'Name'              => $row->Name,
				'Price'             => $row->Price,
				'Number'            => $row->Number
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

