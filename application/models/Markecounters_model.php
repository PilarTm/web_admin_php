<?php

class Markecounters_model extends CI_Model {

  public $id = 0;
  public $title = "";
  public $ident = "";

  function get_all(){
    $res = $this->db->get('mark_ecounters');
    return $res->result();
  }

}
