<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Clothes_factory.php');
class Winter_clothes_factory extends CI_Model implements Clothes_factory {

    public function createClothes() {
        $this->db->order_by('Id', 'AESC');
		$this->db->where('CollectionType', "Winter");
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