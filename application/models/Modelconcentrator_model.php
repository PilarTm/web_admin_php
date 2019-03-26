<?php

class Modelconcentrator_model extends CI_Model {

  public $id = 0;
  public $title = "";
  public $mark_id = 0;

  function get_all(){
    $res = $this->db->get('model_concentrator');
    return $res->result();
  }


}