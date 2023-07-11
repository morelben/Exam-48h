<?php
  class Sport_model extends CI_Model {

    public function get_all_sport(){
      $req="select*from sport";
      $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function get_sport_by_id($id){
      $req="select*from sport where idSport=%s";
      $req = sprintf($req,$id);
      $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function update_sport($id,$nom){
      $req = "Update sport set nomSport ='%s' where idSport= %s";
      $req = sprintf($req,$nom,$id);
      $this->db->query($req);
    }

    public function create_sport($nom,$obj){
      $req = "insert into sport values (null,'%s','%s')";
      $req = sprintf($req,$nom,$obj);
      $this->db->query($req);
    }

    
  }
?>s