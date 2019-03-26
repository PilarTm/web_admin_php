<?php

class Concentrator_model extends CI_Model {

  public $id = 0;
  public $title = "";
  public $model_id = 0;
  public $converter_id = 0;
  public $addr = 0;
  public $serial = "";
  public $place_id = 0;


  function get_title(){
    if( !$this->title ){
      return $this->serial;
    }
    return $this->title;
  }

  function get_all(){
    return $this->get_all_resource()->result();
  }

  function get_all_resource(){
    $this->db->select('concentrator.*');
    $this->db->from("place");
    $this->db->join('place p', 'place.lft >= p.lft and place.rgt <= p.rgt', 'left');
    $this->db->join('user' , "user.place_id = place.id" , "left");
    $this->db->join('concentrator' , "concentrator.place_id = p.id" , "left");
    $this->db->where('user.api_key', $this->session->userdata('api_key'));
    $this->db->where('concentrator.id is not null', NULL, FALSE);
    return $this->db->get();
  }

  function get_by_id( $id = 0 ){
    $this->db->select('concentrator.*');
    $this->db->from('concentrator');
    $this->db->join('user', 'user.place_id = concentrator.place_id', 'left');
    $this->db->join('places', 'places.id = concentrator.place_id', 'left');
    $this->db->join('places p', 'places.lft > p.lft and places.rgt < p.rgt', 'left');
    $this->db->where('user.api_key', $this->session->userdata('api_key'));
    $this->db->where('concentrator.id', (int) $id);
    $query = $this->db->get();
    return new Concentrator_model( (array) $query->row() );
  }


  function insert(){
    if( !$this->place_id ){
      $this->place_id = $this->user_model->myuser()->place_id;
    }

    $res = $this->db->insert('concentrator' , (array) $this);
    if( $res ){
      $this->db->where('id' , $this->db->insert_id());
      $res = $this->db->get('concentrator');

      $converter = new Concentrator_model((array)$res->row()); 
      $log = new Log_model(array(
        'new_data' => json_encode((array) $converter),
        'action' => 'insert',
        'table' => 'concentrator',
        'id_table' => $converter->id,
        'user_id' => $this->user_model->myuser()->id
      ));
      $log->insert();

      return $converter; 
    }
    return new Concentrator_model(); 
  }


  function update(){
    $this->db->replace('concentrator', (array) $this);
    $this->db->where('id' , $this->id);
    $res = $this->db->get('concentrator');
    $after = (array)$res->row();
    $log = new Log_model(array(
      'new_data' => json_encode((array)$res->row()),
      'action' => 'update',
      'table' => 'concentrator',
      'id_table' => $this->id,
      'user_id' => $this->user_model->myuser()->id
    ));
    $log->insert();
    return new Concentrator_model((array)$res->row()); 
  }


  function remove(){

    $this->db->where('id' , $this->id);
    $res = $this->db->get('concentrator');

    $after = (array) $res->row();
    $log = new Log_model(array(
      'new_data' => json_encode((array)$res->row()),
      'action' => 'delete',
      'table' => 'concentrator',
      'id_table' => $this->id,
      'user_id' => $this->user_model->myuser()->id
    ));
    $log->insert();

    $this->db->where('id' , $this->id);
    $this->db->delete('concentrator');
    $this->db->where('id' , $this->id);
    $res = $this->db->get('concentrator');
    return new Concentrator_model((array)$res->row()); 
  }


  function get_all_objects(){
    $res = array();
    foreach( $this->get_all() as $ico ){
      $res[]= new Concentrator_model((array) $ico);
    }
    return $res;
  }




}