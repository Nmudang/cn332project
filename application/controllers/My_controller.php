<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller {

	public function __construct(){
		parent :: __construct();
		$this->load->model('user_model'); 
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data = $this->user_model->get_user_all();
		$this->load->view('header');
		$this->load->view('GetUser', $data);
		$this->load->view('footer');
	}


}
