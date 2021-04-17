<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Logout extends CI_Controller {
	public function index()
	{
		// Load url helper
		$this->load->helper('url');
		$this->session->sess_destroy();
		redirect('/');
	}
}
