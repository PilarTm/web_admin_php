<?php

class Markconcentrator_model extends CI_Model {

  public $id = 0;
  public $title = "";

  function get_all(){
    $res = $this->db->get('mark_concentrator');
    return $res->result();
  }


}