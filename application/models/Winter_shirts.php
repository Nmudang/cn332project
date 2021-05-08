<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//interface Abstract_shirts {
    //public function getCharacter();
//}
class Winter_shirts extends CI_Model implements Abstract_shirts {

    function getCharacter() {
        $this->db->order_by('Id', 'AESC');
		$this->db->where('Type', "shirts");
		$query = $this->db->get('winter');
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