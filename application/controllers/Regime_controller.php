<?php
  class Regime_controller extends CI_Controller {
    public function acceuil_regime() {
      $this->load->helper('url_helper'); 
      $this->load->model('Regime_model');    
      $data['regimes'] = $this->Regime_model->get_all_regime();
      $data['content']='view_Regime';
      $this->load->view('template', $data); 
    }

    public function init_ajout_regime() {   
      $data['content']='view_AjoutRegime';
      $this->load->view('template', $data); 
    }

    public function ajouter_regime(){
      $this->load->helper('url_helper'); 
      $this->load->model('Regime_model');  
      $duree = $this->input->get('duree');
      $obj = $this->input->get('objectif');   
      $min = $this->input->get('min');
      $max = $this->input->get('max');   
      $prix = $this->input->get('prix');
      $desc = $this->input->get('desc');
      $this->Regime_model->create_regime($duree,$min,$max,$obj,$prix,$desc);
      redirect('Regime_controller/acceuil_regime');
    }

    public function delete_regime($id){
      $this->load->helper('url_helper'); 
      $this->load->model('Regime_model');  
      $this->Regime_model->delete_regime($id);
      redirect('Regime_controller/acceuil_regime');
    }
  }
?>