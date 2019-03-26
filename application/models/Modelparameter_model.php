<?php

class Modelparameter_model extends CI_Model {

  public $id = 0;
  public $model_id = 0;
  public $parameter_id = 0;

  function parameters_by_model_id( $model_id = 0 ){
    $this->load->model('parameter_model');

    $this->db->select("parameter.*");
    $this->db->from("model_parameter");
    $this->db->join("parameter" , "parameter.id = model_parameter.parameter_id" , "left");
    $this->db->where('model_parameter.model_id' , (int) $model_id );
    $res = $this->db->get();
    $res_out = array();
    foreach( $res->result() as $iparameter ){
      $res_out[] = new Parameter_model( (array) $iparameter );
    }
    return $res_out;
  }

}