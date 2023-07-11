<?php 
class user_model extends CI_Model {
    public function check_user($mail,$mdp) {	
	    $req = "SELECT * FROM utilisateur WHERE mdp = '%s' and email = '%s' limit 1";
    	$req = sprintf($req,$mdp,$mail);
	    $query = $this->db->query($req);
	    return $query->row_array();
    }

    public function get_utilisateur_by_id($id) {
    	$req = "SELECT * FROM utilisateur WHERE idUtilisateur = %s limit 1";
    	$req = sprintf($req,$this->db->escape($id));
	    $query = $this->db->query($req);
	    return $query->row_array();
    }

    public function get_all_user() {
    	$req = "SELECT * FROM utilisateur";
	    $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function add_user($nom,$prenom,$mail,$mdp) {
    	$req = "INSERT INTO utilisateur VALUES (null,'%s','%s','%s','%s')";
    	$req = sprintf($req,$nom,$prenom,$mail,$mdp);
	    $this->db->query($req);
    }
}
?>