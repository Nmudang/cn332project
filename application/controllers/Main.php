<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Main extends CI_Controller { 
    public function __construct(){
		parent :: __construct(); 
		
		$this->load->model('clothes_model'); //กรณี method อื่นต้องเรียกฐานข้อมูลเหมือนกัน

		//Load helper
		$this->load->helper('url');
	}
    public function index() 
        { 
        $this->load->view('header'); 
        $this->load->view('content'); 
        $this->load->view('footer'); 
        } 
    public function product(){
        $data = $this->clothes_model->get_data(3);
        $this->load->view('header'); 
        $this->load->view('products', $data); 
        $this->load->view('footer');
    }
    public function shirt(){
        $data = $this->clothes_model->get_data(3);
        $this->load->view('header'); 
        $this->load->view('products', $data); 
        $this->load->view('footer');
    }
    public function form(){
		$this->load->view('form');
	}
	public function insert()
	{
		// Load User_model.php
		$this->load->model('clothes_model');

		// returns all POST items with XSS filter
		$submit= $this->input->post(NULL, TRUE);
		$data = array(
			'CollectionType'=>	$submit['CollectionType'],
			'Type'	        =>	$submit['Type'],
			'Name'	        =>	$submit['Name'],
			'Price'	        =>	$submit['Price'],
			'Number'	    =>	$submit['Number']
		);

		// call insert_data() method
		if ( $this->user_model->insert_data($data) )
			$data['insert_result'] = "Insert data successfully!";
		else
			$data['insert_result'] = "Something wrong!";

		// Load insert_result.php
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