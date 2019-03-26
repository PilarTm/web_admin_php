<?php

class Data_model extends CI_Model {

  public $id = 0;
  public $time = "";
  public $parameter_id = 0;
  public $meter_id = 0;
  public $value = 0;
  public $added_ts = "";

  function __construct($p = array()){
    parent::__construct($p);

    $this->load->model('parameter_model');

    $param = $this->parameter_model->get_cache_by_id( $this->parameter_id );
    $divider = $param->divider == 0 ? 1 : $param->divider;
    $this->value = (float) number_format( $this->value / $divider , $param->round , "." , "");
  }



  function get_last_value( $meter_id = 0 ){
    $this->db->order_by('time', 'DESC');
    return $this->db->get('data');
  }

}