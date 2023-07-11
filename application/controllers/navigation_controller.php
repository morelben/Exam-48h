<?php 
class navigation_controller extends CI_Controller {
    public function plat() {    
        $this->load->view('view_Plat'); 
    }
    public function sport() {    
        $this->load->view('view_Sport'); 
    }
    public function regime() {    
        $this->load->view('view_Regime'); 
    }
}
?>