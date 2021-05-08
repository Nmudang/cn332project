<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Winter_trousers extends CI_Model implements Abstract_trousers {

    function getCharacter() {
        $this->db->order_by('Id', 'AESC');
		$this->db->where('Type', "trousers");
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