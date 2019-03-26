<?php

class Modelconverters_model extends CI_Model {

  public $id = 0;
  public $title = "";
  public $ident = "";
  public $mark_id = 0;


  function get_all(){
    $res = $this->db->get('model_converters');
    return $res->result();
  }

}
