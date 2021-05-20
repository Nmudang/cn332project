<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// Load form and url helper
		$this->load->helper(array('form','url'));
		$this->load->model('user_model'); 
	}

	public function index()
	{
		// Load form validation
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname','firstname','trim|required');
		$this->form_validation->set_rules('lastname','lastname','trim|required');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('password2', 'password confirmation','trim|required|callback_check_database');


		if ($this->form_validation->run() == FALSE)
		{
			$data['form'][] = array(
				'username'  => array(
					'type'          => 'text',
					'name'          => 'username',
					'id'            => 'username',
					'maxlength'     => '100',
					'size'          => '50',
				//'required' => 'required'
				),

				'firstname'  => array(
					'type'          => 'text',
					'name'          => 'firstname',
					'id'            => 'firstname',
					'maxlength'     => '100',
					'size'          => '50',
				//'required' => 'required'
				),
				'lastname'  => array(
					'type'          => 'text',
					'name'          => 'lastname',
					'id'            => 'lastname',
					'maxlength'     => '100',
					'size'          => '50',
				//'required' => 'required'
				),
				'password'  => array(
					'type'          => 'password',
					'name'          => 'password',
					'id'            => 'password',
					'maxlength'     => '100',
					'size'          => '50',
				//'required' => 'required'
				),

				'password2'  => array(
					'type'          => 'password',
					'name'          => 'password2',
					'id'            => 'password2',
					'maxlength'     => '100',
					'size'          => '50',
				//'required' => 'required'
				),
				'email'  => array(
					'type'          => 'email',
					'name'          => 'email',
					'id'            => 'email',
					'maxlength'     => '100',
					'size'          => '50',
				//'required' => 'required'
				)
			);

			$data['slogin'] = FALSE;
			$this->load->view('header',$data);
			$this->load->view('from_register',$data);
			$this->load->view('footer');
		}
		else
		{
			redirect('main', 'refresh');
		}
	}

	public function check_database($password)
	{	
		if (empty($password)) {
			$this->form_validation->set_message('check_database', 'The password confirmation field is required.');
			return FALSE;
		}
		
		$submit = $this->input->post(NULL, TRUE);
		if ($submit['password'] != $submit['password2']){
			$this->form_validation->set_message('check_database', 'The Confirm Password field does not match the Password field.');
			return FALSE;
		}

		$user   = array(
			'firstname'		=>	$submit['firstname'],
			'lastname'	=>	$submit['lastname'],
			'email'	    =>	$submit['email'],
			'password'	    =>	$submit['password'],
			'username'	=>	$submit['username']
		);

		if ( $this->user_model->insert_data($user) )
			return TRUE;

		$this->form_validation->set_message('check_database', 'Invalid information.');
		return FALSE;
	}

}
