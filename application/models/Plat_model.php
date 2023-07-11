<?php
  class Plat_model extends CI_Model {

    public function get_all_categorie(){
      $req="select*from categorie_plat";
      $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function get_all_type(){
      $req="select*from type_plat";
      $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function get_all_plat(){
      $req="select*from view_plat";
      $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function get_plat_by_id($id){
      $req="select*from view_plat where idPlat=%s";
      $req = sprintf($req,$id);
      $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function update_plat($id,$nom,$idc,$idt,$resultat){
      $req = "Update plat set nomPlat ='%s',idCategorie=%s,idType=%s,resultat='%s' where idPlat= %s";
      $req = sprintf($req,$nom,$idc,$idt,$resultat,$id);
      $this->db->query($req);
    }
    public function delete_plat($id){
      $req = "delete from plat where idPlat=%s";
      $req = sprintf($req,$id);
      $this->db->query($req);
    }

    public function create_plat($nom,$idc,$idt,$resultat){
      $req = "insert into plat values (null,'%s',%s,%s,'%s')";
      $req = sprintf($req,$nom,$idc,$idt,$resultat);
      $this->db->query($req);
    }

  }
?>