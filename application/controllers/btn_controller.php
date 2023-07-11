<?php 
class btn_controller extends CI_Controller {
    public function detailRegime() {    
        $this->load->view('view_Detail_Regime'); 
    }
    public function ModifPlat() {    
      $this->load->view('view_ModifPlat'); 
    }
    public function AjoutPlat() {    
      $this->load->view('view_AjoutPlat'); 
    }
    public function AjoutSport() {    
      $this->load->view('view_AjoutSport'); 
    }
    public function AjoutRegime() {    
      $this->load->view('view_AjoutRegime'); 
    }
}
?>