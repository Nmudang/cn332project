<?php
defined('BASEPATH') OR exit('No direct script access allowed');
interface Abstract_trousers {
    public function getCharacter();
}
class Summer_trousers extends CI_Model implements Abstract_trousers {
    function getCharacter() {
        $this->db->order_by('Id', 'AESC');
		$this->db->where('CollectionType', "Summer");
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
				'Number'            => $row->Number,
				'product_image'     => $row->product_image
			);
		}
		//var_dump($data); // debug code
		return $data; 
    }
}