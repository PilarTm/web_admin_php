<?php

class Converter_model extends CI_Model {

  public $id = 0;
  public $ip = "";
  public $port = 0;
  public $login = "";
  public $password = "";
  public $model_id = 0;
  public $is_ecxluded = false;
  public $place_id = 0;
  public $title = "";
  public $status = 1;


  function get_id( $id = 0 ){
    $this->db->select('converters.*');
    $this->db->from('converters');
    $this->db->join('user', 'user.place_id = converters.place_id', 'left');
    $this->db->join('places', 'places.id = converters.place_id', 'left');
    $this->db->join('places p', 'places.lft > p.lft and places.rgt < p.rgt', 'left');
    $this->db->where('user.api_key', $this->session->userdata('api_key'));
    $this->db->where('converters.id', (int) $id);
    $query = $this->db->get();
    return new Converter_model( (array) $query->row() );
  }

  function get_by_place_id( $id = null ){
    $this->db->where("place_id" , $id);
    $res = $this->db->get("converters");
    $out = array();
    foreach( $res->result() as $r ){
      $out[] = new Converter_model( (array) $r );
    }
    return $out;
  }

  function get_title(){
    if( !$this->title ){
      return "{$this->ip}:{$this->port}";
    }
    return $this->title;
  }


  function get_all_objects(){
    $res = array();
    foreach( $this->get_all() as $ico ){
      $res[]= new Converter_model((array) $ico);
    }
    return $res;
  }

  function get_all_resource(){
    $this->db->select('converters.*');
    $this->db->from("place");
    $this->db->join('place p', 'place.lft >= p.lft and place.rgt <= p.rgt', 'left');
    $this->db->join('user' , "user.place_id = place.id" , "left");
    $this->db->join('converters' , "converters.place_id = p.id" , "left");
    $this->db->where('user.api_key', $this->session->userdata('api_key'));
    $this->db->where('converters.id is not null', NULL, FALSE);
    return $this->db->get();
  }

  function get_all(){
    return $this->get_all_resource()->result();
  }

  function count_all(){
    return $this->get_all_resource()->num_rows();
  }

  function update(){
    $this->db->replace('converters', (array) $this);
    $this->db->where('id' , $this->id);
    $res = $this->db->get('converters');
    $after = (array)$res->row();
    $log = new Log_model(array(
      'new_data' => json_encode((array)$res->row()),
      'action' => 'update',
      'table' => 'converters',
      'id_table' => $this->id,
      'user_id' => $this->user_model->myuser()->id
    ));
    $log->insert();
    return new Converter_model((array)$res->row()); 
  }

  function remove(){

    $this->db->where('id' , $this->id);
    $res = $this->db->get('converters');

    $after = (array) $res->row();
    $log = new Log_model(array(
      'new_data' => json_encode((array)$res->row()),
      'action' => 'delete',
      'table' => 'converters',
      'id_table' => $this->id,
      'user_id' => $this->user_model->myuser()->id
    ));
    $log->insert();

    $this->db->where('id' , $this->id);
    $this->db->delete('converters');
    $this->db->where('id' , $this->id);
    $res = $this->db->get('converters');
    return new Converter_model((array)$res->row()); 
  }

  function insert(){
    if( !$this->place_id ){
      $this->place_id = $this->user_model->myuser()->place_id;
    }

    $res = $this->db->insert('converters' , (array) $this);
    if( $res ){
      $this->db->where('id' , $this->db->insert_id());
      $res = $this->db->get('converters');

      $converter = new Converter_model((array)$res->row()); 
      $log = new Log_model(array(
        'new_data' => json_encode((array) $converter),
        'action' => 'insert',
        'table' => 'converters',
        'id_table' => $converter->id,
        'user_id' => $this->user_model->myuser()->id
      ));
      $log->insert();

      return $converter; 
    }
    return new Converter_model(); 
  }



  
  // Получение ВООБЩЕ всех параметров от зависимых объетков на этом конвертере
  function get_parameters(){

    $this->load->model("parameter_model");

    $this->db->select("parameter.*");
    $this->db->from("e_counters");
    $this->db->join("converters","converters on converters.id = e_counters.id" , "left");
    $this->db->join("model_parameter","e_counters.model_id = model_parameter.model_id" , "left");
    $this->db->join("parameter","parameter.id = model_parameter.parameter_id" , "left");
    $this->db->where("converters.id" , $this->id);
    $query = $this->db->get();
    $res = array();
    foreach ($query->result() as $param) {
      $res[] = new Parameter_model((array) $param);
    }
    return $res;
  }


}