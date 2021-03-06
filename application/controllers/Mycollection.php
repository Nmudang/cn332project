<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycollection extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model('mycollection_model'); 
		$this->load->model('clothes_model'); 
		$this->load->model('facade');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{

		if (isset($_SESSION['logged_in'])) {
			$data = $this->facade->getheader($_SESSION['uid']);
			$data['clothes'] = $this->clothes_model->createClothes();
			$data['uid'] = $_SESSION['uid'];
			$data['slogin'] = TRUE;
			$this->load->view('header',$data);
			$this->load->view('addcollection', $data);
			$this->load->view('footer');
		}
		else {
			redirect('main/index', 'refresh');
		}

	}
	public function addcollction(){
		$submit = $this->input->post(NULL, TRUE);
		$data = array( 
			'uid'			=>	$submit['uid'],
			'name'			=>	$submit['name']
		);
		if ( $this->mycollection_model->insertName($data) )
			$result = "Insert data successfully!";

		foreach ($submit['collection'] as $element) {
			$data = array(
				'idCollect'		=>  $this->mycollection_model->get_id($submit['uid']),
				'idClothes'		=>	$element
			);
			if ( $this->mycollection_model->insertData($data) )
				$data['insert_result'] = "Insert data successfully!";
		}

		redirect('main/index', 'refresh');

	}



	public function goodsCollection($id) {
        if ( $this->mycollection_model->get_uid($id) == $_SESSION['uid']) {
		$data= $this->facade->goodsCollec($id);
        $slogin = FALSE;
    	if (isset($_SESSION['logged_in'])) {
    			$header = $this->facade->getheader($_SESSION['uid']);
        		$slogin = TRUE;
    		}

        $header['slogin'] = $slogin;
        $this->load->view('header',$header); 
        $this->load->view('products', $data ); 
        $this->load->view('footer'); }

    	else {
    		redirect('main/index', 'refresh');
    	}
	}


	
}