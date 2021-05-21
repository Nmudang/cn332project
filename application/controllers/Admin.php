<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Admin extends CI_Controller { 
public function __construct(){
		parent :: __construct(); 
		$this->load->model('AdminClothes');
		$this->load->model('User_model');
		//Load helper
		$this->load->helper('url');
	}
    public function index() {
    	$slogin = FALSE;
    		if (isset($_SESSION['logged_in'])) {
        		$slogin = TRUE;
        		$data = $this->facade->getheader($_SESSION['uid']);
    		}

        $data['slogin'] = $slogin;
        $this->load->view('header',$data); 
        $this->load->view('content'); 
        $this->load->view('footer'); 
        } 

}