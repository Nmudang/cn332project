<?php

// Concrete implementations
class SummerShirt extends Shirts
{
    public function __construct(string $cloth) {
        parent::__construct($cloth);
        $this->load->model('Clothes_model'); 
		//Load helper
		$this->load->helper('url');
        $data = $this->clothes_model->get_data(3);
        $this->load->view('header');
		$this->load->view('products', $data);
		$this->load->view('footer');
    }
}

class WinterShirt extends Shirts
{
    public function __construct(string $cloth) {
        parent::__construct($cloth);
        $this->load->helper('url');
        $data = $this->clothes_model->get_data(3);
        $this->load->view('header');
		$this->load->view('products', $data);
		$this->load->view('footer');
        
    }
}