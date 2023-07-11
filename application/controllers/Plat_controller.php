<?php 
class Plat_controller extends CI_Controller {
    public function acceuil_plat() {
      $this->load->helper('url_helper'); 
      $this->load->model('Plat_model');    
      $data['plats'] = $this->Plat_model->get_all_plat();
      $data['content']='view_Plat';
      $this->load->view('template', $data); 
    }

    public function init_ajout_plat() {
      $this->load->helper('url_helper'); 
      $this->load->model('Plat_model');    
      $data['categories'] = $this->Plat_model->get_all_categorie();
      $data['types'] = $this->Plat_model->get_all_type();
      $data['content']='view_AjoutPlat';
      $this->load->view('template', $data); 
    }

    public function ajouter_plat(){
      $this->load->helper('url_helper'); 
      $this->load->model('Plat_model');  
      $nom = $this->input->get('nom');
      $categ = $this->input->get('categ');
      $type = $this->input->get('type');
      $obj = $this->input->get('objectif');
      $this->Plat_model->create_plat($nom,$categ,$type,$obj);
      redirect('Plat_controller/acceuil_plat');
    }

    public function delete_plat($id){
      $this->load->helper('url_helper'); 
      $this->load->model('Plat_model');  
      $this->Plat_model->delete_plat($id);
      redirect('Plat_controller/acceuil_plat');
    }
}
?>