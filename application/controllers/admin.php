<?php 

class admin extends CI_Controller {
  public function index() {
    $data['content']='admin_Acceuil';    
    $this->load->view('template',$data); 
  }

}