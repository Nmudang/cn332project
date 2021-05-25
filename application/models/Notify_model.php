<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notify_model extends CI_Model {

	public function getgoods($uid){
		$this->db->where('id', $uid);
		$query = $this->db->get('userdb');

		if ($query->num_rows() > 0){
			$rownoti = $query->row();

			if ($rownoti->notify == 0) {
				$data[] = array( 
						'Id'                => 0,
						'CollectionType'    => "",
						'Type'              => "",
						'Name'              => "",
						'Price'             => "",
						'Number'            => "" )
						;

			}
			else {
				$this->db->order_by('Id', 'DESC');
				$q = $this->db->get('clothes',$rownoti->notify);
				foreach ($q->result() as $row)
				{
					$data[] = array( 
						'Id'                => $row->Id,
						'CollectionType'    => $row->CollectionType,
						'Type'              => $row->Type,
						'Name'              => $row->Name,
						'Price'             => $row->Price,
						'Number'            => $row->Number
					);
				}

			}
			return $data;
		}
	}

	public function clearnotify($uid) {
		$this->db->set('notify',0);
		$this->db->where('id', $uid);
		$this->db->update('userdb');
	}

	public function goods($id) {
		$this->db->where('id', $id);
		$this->db->update('userdb');
	}



}