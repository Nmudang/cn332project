<?php
defined('BASEPATH') OR exit('No direct script access allowed');
interface Abstract_dresses {
    public function getCharacter();
}
class Summer_dresses extends CI_Model implements Abstract_dresses {
	
    public function getCharacter() {
        $this->db->order_by('Id', 'AESC');
		$this->db->where('CollectionType', "Summer",'Type', "dresses");
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
}