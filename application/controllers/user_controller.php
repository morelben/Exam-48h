<?php 
class user_controller extends CI_Controller {
    public function check_login() {
        $this->load->model('user_model');
        $mail = $this->input->post('email');
        $mdp = $this->input->post('password');
        $res = $this->user_model->check_user($mail,$mdp);
    
        if ($res != null) {

            $this->load->library('session'); 
            $_SESSION['id'] = $res['idUtilisateur'];

            if ($mail=='admin@gmail.com' && $mdp == 'admin') {
                // $_SESSION['id'] = 1;
                redirect(site_url('admin'));
            }
            redirect(site_url('login_controller/inscription'));
            // $this->load->view('accueil');
        }
        $this->load->view('loginForms');
    }

    public function inscription() {
        $this->load->model('user_model');
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $mail = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        
        $this->user_model->add_user($nom,$prenom,$mail,$mdp);

        redirect(site_url('login_controller/login'));
    }

}
?>