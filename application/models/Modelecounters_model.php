<?php

class Modelecounters_model extends CI_Model {

  public $id = 0;
  public $title = "";
  public $library = "";
  public $mark_id = 0;


  function get_all(){
    $res = $this->db->get('model_ecounters');
    return $res->result();
  }

  function get_id( $id = 0 ){
    $this->db->where( 'id' , (int) $id );
    $res = $this->db->get('model_ecounters');
    return new Modelecounters_model((array)$res->row());
  }

}
