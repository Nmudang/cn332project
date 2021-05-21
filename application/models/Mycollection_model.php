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

	public function get_uid($id) {

	}

	public function getGoods($idCollect) {
		$this->db->where('idCollect', $idCollect);
		$query = $this->db->get('collectionuser');
		if ($query->num_rows() > 0 ){
			foreach ($query->result() as $row)
			{
				$this->db->where('id', $row->idClothes);
				$qClothes = $this->db->get('clothes');
					$rowClothes = $qClothes->row();
					$data['clothes'][] = array( 
						'Id'                => $rowClothes->Id,
						'CollectionType'    => $rowClothes->CollectionType,
						'Type'              => $rowClothes->Type,
						'Name'              => $rowClothes->Name,
						'Price'             => $rowClothes->Price,
						'Number'            => $rowClothes->Number,
						'product_image'     => $row->product_image
					);
				
			}
		}
		else {
			$data['clothes'][] = array( 
						'Id'                => 0
					);
		}
		return $data;
	}

	public function getCollect($uid){
		$this->db->where('uid', $uid);
		$query = $this->db->get('mycollection');
		if ($query->num_rows() > 0 ) {
			foreach ($query->result() as $row)
			{
				$data[] = array( 
					'id'     => $row->id,
					'uid'    => $row->uid,
					'name'	 => $row->name
				);
			}
		}
		else {
			$data[] = array( 
				'id'     => 0
			);
		}
		return $data;
	}
}