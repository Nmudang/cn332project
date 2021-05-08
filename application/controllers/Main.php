<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Main extends CI_Controller { 
    public function __construct(){
		parent :: __construct(); 

		//Load helper
		$this->load->helper('url');
	}
    public function index() {
    	$slogin = FALSE;
    		if (isset($_SESSION['logged_in'])) {
        		$slogin = TRUE;
    		}

        $data['slogin'] = $slogin;
        $this->load->view('header',$data); 
        $this->load->view('content'); 
        $this->load->view('footer'); 
        } 
	public function summer() 
        { 
        
		$this->load->model('summer_clothes_factory');
		$data = $this->summer_clothes_factory->createClothes();
        $slogin = FALSE;
    		if (isset($_SESSION['logged_in'])) {
        		$slogin = TRUE;
    		}

        $data['slogin'] = $slogin;
        $this->load->view('header',$data); 
        $this->load->view('products', $data ); 
        $this->load->view('footer'); 
        } 
	public function winter() 
        { 
        	$slogin = FALSE;
    	if (isset($_SESSION['logged_in'])) {
        		$slogin = TRUE;
    		}
        
		$this->load->model('winter_clothes_factory');
		$data = $this->winter_clothes_factory->createClothes();
        $slogin = FALSE;
    		if (isset($_SESSION['logged_in'])) {
        		$slogin = TRUE;
    		}

        $data['slogin'] = $slogin;
        $this->load->view('header',$data); 
        $this->load->view('products', $data ); 
        $this->load->view('footer'); 
        } 
	public function product() 
        { 
        	
		$this->load->model('clothes_model');
		$data = $this->clothes_model->createClothes();
        $slogin = FALSE;
    		if (isset($_SESSION['logged_in'])) {
        		$slogin = TRUE;
    		}

        $data['slogin'] = $slogin;
        $this->load->view('header',$data); 
        $this->load->view('products', $data);
        $this->load->view('footer'); 
        } 
	public function shirts(){
		
        
		$this->load->model('summer_shirts');
		$this->load->model('winter_shirts');
		$summer = $this->summer_shirts->getCharacter();
		$winter = $this->winter_shirts->getCharacter();
		$slogin = FALSE;
    		if (isset($_SESSION['logged_in'])) {
        		$slogin = TRUE;
    		}

        $data['slogin'] = $slogin;
        $this->load->view('header',$data); 
		$this->load->view('products', $summer);
		$this->load->view('products', $winter); 
		$this->load->view('footer');
	}
	public function dresses(){
		
        
		$this->load->model('summer_dresses');
		$this->load->model('winter_dresses');
        $summer = $this->summer_dresses->getCharacter();
		$winter = $this->winter_dresses->getCharacter();
		$slogin = FALSE;
    		if (isset($_SESSION['logged_in'])) {
        		$slogin = TRUE;
    		}

        $data['slogin'] = $slogin;
        $this->load->view('header',$data); 
		$this->load->view('products', $summer);
		$this->load->view('products', $winter); 
		$this->load->view('footer');
    }
	public function trousers(){
		$this->load->model('summer_trousers');
		$this->load->model('winter_trousers');
        $summer = $this->summer_trousers->getCharacter();
		$winter = $this->winter_trousers->getCharacter();
		$slogin = FALSE;
    		if (isset($_SESSION['logged_in'])) {
        		$slogin = TRUE;
    		}

        $data['slogin'] = $slogin;
        $this->load->view('header',$data); 
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

}