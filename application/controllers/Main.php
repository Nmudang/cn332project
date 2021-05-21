<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Main extends CI_Controller { 
    public function __construct(){
		parent :: __construct(); 
		$this->load->model('facade');
		$this->load->model('notify_model');
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

	public function summer() { 
        
		$data = $this->facade->getSummer();
        $slogin = FALSE;
    		if (isset($_SESSION['logged_in'])) {
        		$slogin = TRUE;
        		$header = $this->facade->getheader($_SESSION['uid']);
    		}

        $header['slogin'] = $slogin;
        $this->load->view('header',$header); 
        $this->load->view('products', $data ); 
        $this->load->view('footer'); 
        } 
	public function winter(){ 
 
		$data = $this->facade->getWinter();
        $slogin = FALSE;
    		if (isset($_SESSION['logged_in'])) {
    			$header = $this->facade->getheader($_SESSION['uid']);
        		$slogin = TRUE;
    		}

        $header['slogin'] = $slogin;
        $this->load->view('header',$header); 
        $this->load->view('products', $data ); 
        $this->load->view('footer'); 
        } 
	public function product() { 
        	
		$this->load->model('clothes_model');
		$data = $this->clothes_model->createClothes();
        $slogin = FALSE;
    	if (isset($_SESSION['logged_in'])) {
    			$header = $this->facade->getheader($_SESSION['uid']);
        		$slogin = TRUE;
    		}

        $header['slogin'] = $slogin;
        $this->load->view('header',$header); 
        $this->load->view('products', $data);
        $this->load->view('footer'); 
        } 
	public function shirts(){
		
		$summer = $this->facade->getShirtSummer();
		$winter = $this->facade->getShirtWinter();
		$slogin = FALSE;
    	if (isset($_SESSION['logged_in'])) {
    			$header = $this->facade->getheader($_SESSION['uid']);
        		$slogin = TRUE;
    		}

        $header['slogin'] = $slogin;
        $this->load->view('header',$header); 
		$this->load->view('products', $summer);
		$this->load->view('products', $winter); 
		$this->load->view('footer');
	}
	public function dresses(){
		

        $summer = $this->facade->getDressesSummer();
		$winter = $this->facade->getDressesWinter();
		$slogin = FALSE;
    	if (isset($_SESSION['logged_in'])) {
    			$header = $this->facade->getheader($_SESSION['uid']);
        		$slogin = TRUE;
    		}

        $header['slogin'] = $slogin;
        $this->load->view('header',$header); 
		$this->load->view('products', $summer);
		$this->load->view('products', $winter); 
		$this->load->view('footer');
    }
	public function trousers(){
		
        $summer = $this->facade->getTrousersSummer();
		$winter = $this->facade->getTrousersWinter();
		if (isset($_SESSION['logged_in'])) {
    			$header = $this->facade->getheader($_SESSION['uid']);
        		$slogin = TRUE;
    		}

        $header['slogin'] = $slogin;
        $this->load->view('header',$header);  
		$this->load->view('products', $summer);
		$this->load->view('products', $winter); 
		$this->load->view('footer');
    }
    public function form(){
		$this->load->view('form');
	}
	public function insert()
	{
		$this->load->model('clothes_model');

		
		$submit= $this->input->post(NULL, TRUE);
		$data = array(
			'CollectionType'=>	$submit['CollectionType'],
			'Type'	        =>	$submit['Type'],
			'Name'	        =>	$submit['Name'],
			'Price'	        =>	$submit['Price'],
			'Number'	    =>	$submit['Number']
		);

		if ( $this->user_model->insert_data($data) )
			$data['insert_result'] = "Insert data successfully!";
		else
			$data['insert_result'] = "Something wrong!";

		$this->load->view('insert_result', $data);
	}

	public function update($id)
	{
		$data = $this->clothes_model->get_data1($id);

		if ( ! $this->input->post('submit') ) {
			$this->load->view('update_form',$data);
		} else {
			$submit= $this->input->post(NULL, TRUE);
			$data = array(
				'CollectionType'=>	$submit['CollectionType'],
                'Type'	        =>	$submit['Type'],
                'Name'	        =>	$submit['Name'],
                'Price'	        =>	$submit['Price'],
                'Number'	    =>	$submit['Number']
			);
			$this->user_model->update_data($id,$data);
			redirect('main');
		}
	}
	public function delete($id){
		$this->user_model->delete_data($id);
		redirect('main');
	}

	public function cleargoods(){
		$this->notify_model->clearnotify($_SESSION['uid']);
		redirect('main');
	}

	public function goods($id){
		$data['clothes'] = $this->facade->getGoods($id);
        $slogin = FALSE;
    	if (isset($_SESSION['logged_in'])) {
    			$header = $this->facade->getheader($_SESSION['uid']);
        		$slogin = TRUE;
    		}

        $header['slogin'] = $slogin;
        $this->load->view('header',$header); 
        $this->load->view('products', $data ); 
        $this->load->view('footer'); 
	}

	public function goodsCollection($id) {

		$data= $this->facade->goodsCollec($id);
        $slogin = FALSE;
    	if (isset($_SESSION['logged_in'])) {
    			$header = $this->facade->getheader($_SESSION['uid']);
        		$slogin = TRUE;
    		}

        $header['slogin'] = $slogin;
        $this->load->view('header',$header); 
        $this->load->view('products', $data ); 
        $this->load->view('footer'); 
	}



}