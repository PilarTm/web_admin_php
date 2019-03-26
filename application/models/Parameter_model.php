<?php

class Parameter_model extends CI_Model {

  public $id = 0;
  public $ident = "";
  public $title = "";
  public $divider = 1000;
  public $round = 3;


  protected $cache_parameters = null;

  function get_cache_by_id( $id = NULL ){
    if( !$id ){
      return new Parameter_model();
    }

    if( is_null($this->cache_parameters) ){
      $this->cache_parameters = $this->get_all_to_model();
    }

    if( isset( $this->cache_parameters[ $id ] ) ){
      return $this->cache_parameters[ $id ];
    }
    return new Parameter_model();
  }

  function get_all_to_model(){
    $res = array();
    foreach ($this->get_all() as $row) {
      $res[$row->id] = new Parameter_model((array) $row);
    }
    return $res;
  }

  function get_all(){
    $res = $this->db->get('parameter');
    return $res->result();
  }
  

}