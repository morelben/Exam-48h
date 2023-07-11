<?php
  class Sport_controller extends CI_Controller {
    public function acceuil_sport() {
      $this->load->helper('url_helper'); 
      $this->load->model('Sport_model');    
      $data['sports'] = $this->Sport_model->get_all_sport();
      $data['content']='view_Sport';
      $this->load->view('template', $data); 
    }

    public function init_ajout_sport() {   
      $data['content']='view_AjoutSport';
      $this->load->view('template', $data); 
    }
    public function ajouter_sport() {
      $this->load->helper('url_helper'); 
      $this->load->model('Sport_model');   
      $nom = $this->input->get('nom');
      $obj = $this->input->get('resultat'); 
      $this->Sport_model->create_sport($nom,$obj);
      redirect('Sport_controller/acceuil_sport');
    }
  }
?>