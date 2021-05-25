<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Main extends CI_Controller { 
    public function __construct(){
      parent :: __construct(); 
      $this->load->model('facade');
      $this->load->model('notify_model');
      $this->load->model('clothes_model');
      $this->load->model('user_model');
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

  public function uploadgoods(){

      if ($this->user_model->checkadmin($_SESSION['uid'])) {
          $slogin = FALSE;
          if (isset($_SESSION['logged_in'])) {
              $slogin = TRUE;
              $data = $this->facade->getheader($_SESSION['uid']);
          }

          $data['slogin'] = $slogin;
          $this->load->view('header',$data); 
          $this->load->view('custom_view', array('error' => ' ' ));
           
      }
      else {
          redirect('main');
      }
  }

  public function insert(){
      
    $config = array(
      'file_name'         => time().$_FILES["userfile"]['name'],
      'upload_path'       => "./public/images/",
      'allowed_types'     => "gif|jpg|png|jpeg",
      'overwrite' => TRUE
          );

    $this->load->library('upload', $config);

    if($this->upload->do_upload()) { 

        $submit= $this->input->post(NULL, TRUE);
        $data = array('upload_data' => $this->upload->data());
        $data = array(
          'CollectionType'=>	$submit['CollectionType'],
          'Type'	        =>	$submit['Type'],
          'Name'	        =>	$submit['Name'],
          'Price'	        =>	$submit['Price'],
          'Number'	      =>	$submit['Number'],
          'product_image' =>  $this->upload->data('file_name')
      );

        $this->clothes_model->insert($data);

    }
    else{
      redirect('main/shirts');
    }
    redirect('main');
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



}