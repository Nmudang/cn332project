<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class shopping_cart_model extends CI_Model {
    function fetch_all(){

        $query = $this->db->get("clothes");
        return $query->result();  
    }
}