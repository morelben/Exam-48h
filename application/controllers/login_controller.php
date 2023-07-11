<?php 
class login_controller extends CI_Controller {
    public function login() {    
        $this->load->view('loginForms'); 
    }

    public function inscription() {
        $this->load->view('inscriptionForm'); 
    }
}
?>