<?php
  class Regime_model extends CI_Model {
    public function get_all_regime(){
      $req="select*from regime";
      $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function get_regime_by_id($id){
      $req="select*from regime where idRegime=%s";
      $req = sprintf($req,$id);
      $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function get_sport_by_idr($idr){
      $req="select*from vv where idRegime=%s";
      $req = sprintf($req,$idr);
      $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function delete_sport_regime($idr,$ids){
      $req="delete from sportRegime where idRegime=%s and idSport=%s";
      $req = sprintf($req,$idr,$ids);
      $this->db->query($req);
    }

    public function update_sport_regime($idr,$ids,$rep){
      $req="Update sportRegime set description='%s' where idRegime= %s and idSport=%s";
      $req = sprintf($req,$rep,$idr,$ids,$jour);
      $this->db->query($req);
    }

    public function update_regime($id,$duree,$min,$max,$obj,$prix,$desc){
      $req = "Update regime set duree=%s,min=%s,max=%s,objectif=%s,prix=%s,description='%s' where idRegime= %s";
      $req = sprintf($req,$duree,$min,$max,$obj,$prix,$desc,$id);
      $this->db->query($req);
    }

    public function create_regime($duree,$min,$max,$obj,$prix,$desc){
      $req = "insert into regime values (null,%s,%s,%s,'%s',%s,'%s')";
      $req = sprintf($req,$duree,$min,$max,$obj,$prix,$desc);
      $this->db->query($req);
    }
     public function delete_regime($id){
      $req = "delete from sportRegime where idRegime=%s";
      $req=sprintf($req,$id);
      $this->db->query($req);
      $reqq = "delete from regime where idRegime=%s";
      $reqq=sprintf($reqq,$id);
      $this->db->query($reqq);

     }


  }
?>