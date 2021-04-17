<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// Load form and url helper
		$this->load->helper(array('form','url'));
	}

	public function index()
	{
		// Load form validation
		$this->load->library('form_validation');

		// check input when click submit button
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password', 'Password','trim|required|callback_check_database'); // ใส่ครบก็ไป call check_database

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('form_login');
			$this->load->view('footer');
		}
		else
		{
			redirect('my_controller/index', 'refresh');
		}
	}

	public function check_database($password)
	{
		if (empty($password)) {
			$this->form_validation->set_message('check_database', 'The Password field is required.');
			return FALSE;
		}

		// Load post_model.php
		$this->load->model('user_model');

		// ดึงข้อมูลที่ชื่อ username 
		$username = $this->input->post('username');

		// call func login in User_model
		if ($this->user_model->login($username,$password))
		{
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('logged_in','1');
			return TRUE;
		}
		
		$this->form_validation->set_message('check_database', 'Invalid username or password.');
		return FALSE;
	}

}
